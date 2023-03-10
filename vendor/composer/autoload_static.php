<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1f419dc1623712f1c5d19cb31adc7700
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tributemedia\\TmProjectGallery\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tributemedia\\TmProjectGallery\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit1f419dc1623712f1c5d19cb31adc7700::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1f419dc1623712f1c5d19cb31adc7700::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1f419dc1623712f1c5d19cb31adc7700::$classMap;

        }, null, ClassLoader::class);
    }
}
