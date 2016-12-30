<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf1fa5e4212f173908bcce4ce951657e8
{
    public static $files = array (
        'ffc653ebb378fa90d67fe6f646cf02f4' => __DIR__ . '/../..' . '/src/db_functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'itb\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'itb\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf1fa5e4212f173908bcce4ce951657e8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf1fa5e4212f173908bcce4ce951657e8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
