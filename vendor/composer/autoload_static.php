<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc106b562d561666eda7c1d8cf441dafe
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc106b562d561666eda7c1d8cf441dafe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc106b562d561666eda7c1d8cf441dafe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc106b562d561666eda7c1d8cf441dafe::$classMap;

        }, null, ClassLoader::class);
    }
}
