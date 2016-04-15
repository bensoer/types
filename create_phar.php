<?php
/**
 * Created by PhpStorm.
 * User: bensoer
 * Date: 14/04/16
 * Time: 10:20 PM
 */

$srcRoot = __DIR__;
$buildRoot = __DIR__ . "/build";

$phar = new Phar($buildRoot . "/types.phar", FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::KEY_AS_FILENAME, "types.phar");

$phar->buildFromDirectory($srcRoot . "/lib");
$phar->setStub($phar->createDefaultStub("index.php"));