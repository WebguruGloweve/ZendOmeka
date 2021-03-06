<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf2f670638361a4081f9c5073926e14d7
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OmekaTestHelper\\' => 16,
        ),
        'D' => 
        array (
            'DerivativeImages\\' => 17,
            'DerivativeImagesTest\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OmekaTestHelper\\' => 
        array (
            0 => __DIR__ . '/..' . '/biblibre/omeka-s-test-helper/src',
        ),
        'DerivativeImages\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'DerivativeImagesTest\\' => 
        array (
            0 => __DIR__ . '/../..' . '/test/DerivativeImagesTest',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf2f670638361a4081f9c5073926e14d7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf2f670638361a4081f9c5073926e14d7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
