<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit17c3c3f86d3299623958734fb2fce633
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit17c3c3f86d3299623958734fb2fce633::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit17c3c3f86d3299623958734fb2fce633::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit17c3c3f86d3299623958734fb2fce633::$classMap;

        }, null, ClassLoader::class);
    }
}
