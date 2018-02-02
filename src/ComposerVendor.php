<?php
namespace Wei\ComposerVendorDirectory;

/**
 * 获取composer vendor 目录
 *
 * Class ComposerVendor
 * @package Wei\ComposerVendorDirectory
 */
class ComposerVendor
{
    private static $vendorDir = null;

    private function __construct()
    {
    }

    /**
     * 获取composer vendor目录
     * @return string 返回composer vendor目录
     */
    public static function getDir()
    {
        if (isset(self::$vendorDir))
            return self::$vendorDir;

        self::$vendorDir = dirname(dirname(dirname(__DIR__)));
        return self::$vendorDir;
    }

    /**
     * 获取composer vendor父目录(即composer vendor所在目录)
     *
     * @return string 返回composer vendor所在目录
     */
    public static function getParentDir()
    {
        return dirname(self::getDir());
    }
}