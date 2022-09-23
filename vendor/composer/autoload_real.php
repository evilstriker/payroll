<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb51a9223a2b5feb24adf3bd58e18581c
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

        spl_autoload_register(array('ComposerAutoloaderInitb51a9223a2b5feb24adf3bd58e18581c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb51a9223a2b5feb24adf3bd58e18581c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb51a9223a2b5feb24adf3bd58e18581c::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInitb51a9223a2b5feb24adf3bd58e18581c::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequireb51a9223a2b5feb24adf3bd58e18581c($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequireb51a9223a2b5feb24adf3bd58e18581c($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
