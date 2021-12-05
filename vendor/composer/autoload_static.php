<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13e241b422011f2b84e0df3655eb5e7a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit13e241b422011f2b84e0df3655eb5e7a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit13e241b422011f2b84e0df3655eb5e7a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit13e241b422011f2b84e0df3655eb5e7a::$classMap;

        }, null, ClassLoader::class);
    }
}