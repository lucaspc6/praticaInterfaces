<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit016d8e2b371d41b0fac3ed42e3809273
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Src\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Src\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit016d8e2b371d41b0fac3ed42e3809273::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit016d8e2b371d41b0fac3ed42e3809273::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit016d8e2b371d41b0fac3ed42e3809273::$classMap;

        }, null, ClassLoader::class);
    }
}
