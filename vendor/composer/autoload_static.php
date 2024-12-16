<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13b2a603093d5c4ff8852f9593ce8268
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit13b2a603093d5c4ff8852f9593ce8268::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit13b2a603093d5c4ff8852f9593ce8268::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit13b2a603093d5c4ff8852f9593ce8268::$classMap;

        }, null, ClassLoader::class);
    }
}