<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7a6c0ff16cd4860213444d06ac3ba7ed
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\Models\\' => 11,
            'Src\\Controller\\' => 15,
            'Src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/models',
        ),
        'Src\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/controller',
        ),
        'Src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit7a6c0ff16cd4860213444d06ac3ba7ed::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7a6c0ff16cd4860213444d06ac3ba7ed::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7a6c0ff16cd4860213444d06ac3ba7ed::$classMap;

        }, null, ClassLoader::class);
    }
}
