<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5088587b99e2fd926bb89c2fce77969f
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5088587b99e2fd926bb89c2fce77969f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5088587b99e2fd926bb89c2fce77969f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
