<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd5a48d1a7c405462d996be7a5c112f26
{
    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/../..' . '/App',
                1 => __DIR__ . '/..' . '/ehime/hello-world/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitd5a48d1a7c405462d996be7a5c112f26::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
