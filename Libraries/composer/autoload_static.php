<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit613086141d98f5bafa231aaa71ac60a9
{
    public static $files = array (
        'decc78cc4436b1292c6c0d151b19445c' => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phpseclib\\' => 10,
        ),
        'L' => 
        array (
            'League\\Csv\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phpseclib\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpseclib/phpseclib/phpseclib',
        ),
        'League\\Csv\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/csv/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit613086141d98f5bafa231aaa71ac60a9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit613086141d98f5bafa231aaa71ac60a9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
