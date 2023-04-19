<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2ea56af00ef86aad0b1f263abd0adfce
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kicken\\Gearman\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kicken\\Gearman\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2ea56af00ef86aad0b1f263abd0adfce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2ea56af00ef86aad0b1f263abd0adfce::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}