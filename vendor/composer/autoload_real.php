<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita86b9cef133e43de1d6ed03241dc7e50
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInita86b9cef133e43de1d6ed03241dc7e50', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita86b9cef133e43de1d6ed03241dc7e50', 'loadClassLoader'));

        $includePaths = require __DIR__ . '/include_paths.php';
        $includePaths[] = get_include_path();
        set_include_path(implode(PATH_SEPARATOR, $includePaths));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita86b9cef133e43de1d6ed03241dc7e50::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInita86b9cef133e43de1d6ed03241dc7e50::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequirea86b9cef133e43de1d6ed03241dc7e50($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequirea86b9cef133e43de1d6ed03241dc7e50($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
