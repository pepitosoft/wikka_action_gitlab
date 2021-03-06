<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit94b0352a65559b5432b7278338ab9c4b
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'cebe\\markdown\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'cebe\\markdown\\' => 
        array (
            0 => __DIR__ . '/..' . '/cebe/markdown',
        ),
    );

    public static $prefixesPsr0 = array (
        'G' => 
        array (
            'Gitlab\\' => 
            array (
                0 => __DIR__ . '/..' . '/m4tthumphrey/php-gitlab-api/lib',
            ),
        ),
        'B' => 
        array (
            'Buzz' => 
            array (
                0 => __DIR__ . '/..' . '/kriswallsmith/buzz/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit94b0352a65559b5432b7278338ab9c4b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit94b0352a65559b5432b7278338ab9c4b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit94b0352a65559b5432b7278338ab9c4b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
