# composer-vendor-directory

> composer-vendor-directory  package is used to get the composer vendor directory.
> composer-vendor-directory包用于获取作composer vendor目录路径.


## 1 安装(Install)
> 1. 通过Composer安装
> 2. 创建composer.json文件,并写入以下内容:

```php
{
  "require": {
    "zwei/composer-vendor-directory": "1.0.1"
  }
}
```
> 3. 执行composer install

## 使用示例(use)
> 1. 例如项目目录在"E:\web\php7\test"
> 2. 创建index.php,并加入以下内容

```php
<?php
include 'vendor/autoload.php';
// 获取composer vendor目录
$dir = \Zwei\ComposerVendorDirectory\ComposerVendor::getDir();
var_dump($dir);
// 获取composer vendor 父目录
$dir = \Zwei\ComposerVendorDirectory\ComposerVendor::getParentDir();
var_dump($dir);
```

> 3. 结果
```cmd
E:\web\php7\test>php index.php
string(23) "E:\web\php7\test\vendor"
string(16) "E:\web\php7\test"
```
