<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1190d0e288d05e8bdf7171acfefc1ecd
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'Jodit\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Jodit\\' => 
        array (
            0 => __DIR__ . '/..' . '/jodit/application/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'a' => 
        array (
            'abeautifulsite' => 
            array (
                0 => __DIR__ . '/..' . '/abeautifulsite/simpleimage/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1190d0e288d05e8bdf7171acfefc1ecd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1190d0e288d05e8bdf7171acfefc1ecd::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit1190d0e288d05e8bdf7171acfefc1ecd::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}