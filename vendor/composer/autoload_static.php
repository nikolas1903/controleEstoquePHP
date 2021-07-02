<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5c0bd929a9df7cd62263854f4344f73e
{
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5c0bd929a9df7cd62263854f4344f73e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5c0bd929a9df7cd62263854f4344f73e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5c0bd929a9df7cd62263854f4344f73e::$classMap;

        }, null, ClassLoader::class);
    }
}