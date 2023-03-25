<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf66df58f83599e47fc3fca13fe62c8fc
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\CaBundle\\' => 18,
        ),
        'A' => 
        array (
            'Abraham\\TwitterOAuth\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\CaBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/ca-bundle/src',
        ),
        'Abraham\\TwitterOAuth\\' => 
        array (
            0 => __DIR__ . '/..' . '/abraham/twitteroauth/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf66df58f83599e47fc3fca13fe62c8fc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf66df58f83599e47fc3fca13fe62c8fc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf66df58f83599e47fc3fca13fe62c8fc::$classMap;

        }, null, ClassLoader::class);
    }
}
