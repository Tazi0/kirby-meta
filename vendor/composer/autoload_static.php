<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbec78ca1ee684d407c24e1168fde0972
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kirby\\' => 6,
        ),
        'F' => 
        array (
            'FabianMichael\\Meta\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/..' . '/getkirby/composer-installer/src',
        ),
        'FabianMichael\\Meta\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'FabianMichael\\Meta\\PageMeta' => __DIR__ . '/../..' . '/src/PageMeta.php',
        'FabianMichael\\Meta\\SiteMeta' => __DIR__ . '/../..' . '/src/SiteMeta.php',
        'FabianMichael\\Meta\\Sitemap' => __DIR__ . '/../..' . '/src/Sitemap.php',
        'Kirby\\ComposerInstaller\\CmsInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/CmsInstaller.php',
        'Kirby\\ComposerInstaller\\Installer' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Installer.php',
        'Kirby\\ComposerInstaller\\Plugin' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Plugin.php',
        'Kirby\\ComposerInstaller\\PluginInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/PluginInstaller.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbec78ca1ee684d407c24e1168fde0972::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbec78ca1ee684d407c24e1168fde0972::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbec78ca1ee684d407c24e1168fde0972::$classMap;

        }, null, ClassLoader::class);
    }
}
