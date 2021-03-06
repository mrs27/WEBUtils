<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3f2ccabc09525c045a84410c846ed84c
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WEBUtils\\' => 9,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WEBUtils\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PHPRtfLite' => 
            array (
                0 => __DIR__ . '/..' . '/phprtflite/phprtflite/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3f2ccabc09525c045a84410c846ed84c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3f2ccabc09525c045a84410c846ed84c::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit3f2ccabc09525c045a84410c846ed84c::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
