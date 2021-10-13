<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ccbf1bead643e3eb28c9b5dca544465
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5ccbf1bead643e3eb28c9b5dca544465::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5ccbf1bead643e3eb28c9b5dca544465::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5ccbf1bead643e3eb28c9b5dca544465::$classMap;

        }, null, ClassLoader::class);
    }
}