<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5154f40880c75dea4c0e16dc62d0cdb1
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Midtrans\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Midtrans\\' => 
        array (
            0 => __DIR__ . '/..' . '/midtrans/midtrans-php/Midtrans',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5154f40880c75dea4c0e16dc62d0cdb1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5154f40880c75dea4c0e16dc62d0cdb1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5154f40880c75dea4c0e16dc62d0cdb1::$classMap;

        }, null, ClassLoader::class);
    }
}
