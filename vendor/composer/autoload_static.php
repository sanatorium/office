<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit54377c49f581e2fbc5e59f17b6e70430
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sanatorium\\Office\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sanatorium\\Office\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit54377c49f581e2fbc5e59f17b6e70430::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit54377c49f581e2fbc5e59f17b6e70430::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}