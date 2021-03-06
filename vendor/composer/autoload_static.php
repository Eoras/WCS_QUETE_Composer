<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitad2d1b74ec5175f8780f49644716fe2f
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Wcs\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Wcs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Wcs',
        ),
    );

    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitad2d1b74ec5175f8780f49644716fe2f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitad2d1b74ec5175f8780f49644716fe2f::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitad2d1b74ec5175f8780f49644716fe2f::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
