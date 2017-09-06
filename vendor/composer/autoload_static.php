<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3b445143a965c3f68a6db454be330334
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
            0 => __DIR__ . '/../..' . '/Application',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3b445143a965c3f68a6db454be330334::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3b445143a965c3f68a6db454be330334::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}