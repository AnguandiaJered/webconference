<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf98c0fd6b74aecc452dff1a0a32e3c6
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitbf98c0fd6b74aecc452dff1a0a32e3c6::$classMap;

        }, null, ClassLoader::class);
    }
}
