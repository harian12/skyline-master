<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerDirs(
    [
        $config->application->controllersDir,
        $config->application->modelsDir
    ]
    );

$loader->registerNamespaces(
    [
        'App\Forms' => APP_PATH.'/forms/',
    ]
    );

$loader->register();
