<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6f0df7625005c829a892e60f1504b1ce
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
        'App\\Controllers\\LoginController' => __DIR__ . '/../..' . '/app/Controllers/LoginController.php',
        'App\\Views\\View' => __DIR__ . '/../..' . '/app/Views/View.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6f0df7625005c829a892e60f1504b1ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6f0df7625005c829a892e60f1504b1ce::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6f0df7625005c829a892e60f1504b1ce::$classMap;

        }, null, ClassLoader::class);
    }
}
