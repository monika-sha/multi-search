<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit990b6c7b3db7a85d3c4e1da2859ddc4a
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Buki\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Buki\\' => 
        array (
            0 => __DIR__ . '/..' . '/izniburak/pdox/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit990b6c7b3db7a85d3c4e1da2859ddc4a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit990b6c7b3db7a85d3c4e1da2859ddc4a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
