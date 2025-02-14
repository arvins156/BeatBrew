<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5b1c30ce9b64db470e6767c477f1f36b
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SpotifyLyricsApi\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SpotifyLyricsApi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5b1c30ce9b64db470e6767c477f1f36b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5b1c30ce9b64db470e6767c477f1f36b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5b1c30ce9b64db470e6767c477f1f36b::$classMap;

        }, null, ClassLoader::class);
    }
}
