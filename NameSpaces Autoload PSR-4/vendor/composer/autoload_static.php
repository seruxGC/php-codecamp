<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit74a944b67b966ac7bf94d2d6a20acd72
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Names\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Names\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Names\\Controller\\Controla' => __DIR__ . '/../..' . '/src/controller/Controla.php',
        'Names\\Model\\Ala' => __DIR__ . '/../..' . '/src/model/Ala.php',
        'Names\\Model\\B' => __DIR__ . '/../..' . '/src/model/B.php',
        'Names\\Model\\iEscribe' => __DIR__ . '/../..' . '/src/model/iEscribe.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit74a944b67b966ac7bf94d2d6a20acd72::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit74a944b67b966ac7bf94d2d6a20acd72::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit74a944b67b966ac7bf94d2d6a20acd72::$classMap;

        }, null, ClassLoader::class);
    }
}
