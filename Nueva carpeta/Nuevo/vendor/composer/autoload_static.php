<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb0f7b61372a0033cd565f338b816ac91
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpAmqpLib\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpAmqpLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb0f7b61372a0033cd565f338b816ac91::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb0f7b61372a0033cd565f338b816ac91::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
