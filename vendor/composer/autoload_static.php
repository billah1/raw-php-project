<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit81343df841f5d3c471ce3a0d69679ebb
{
    public static $files = array (
        '7c7eb82769636325d702020c7b22c8b4' => __DIR__ . '/../..' . '/app/helpers/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit81343df841f5d3c471ce3a0d69679ebb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit81343df841f5d3c471ce3a0d69679ebb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit81343df841f5d3c471ce3a0d69679ebb::$classMap;

        }, null, ClassLoader::class);
    }
}
