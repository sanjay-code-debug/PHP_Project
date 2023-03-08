<?php

/**
 * Declaration of Controllers For Furthur Use
 */
use Controller\Home;

/**
 *   getUrl() is a Global Method is used to Get URL(Only get this Current Base URL ) e.g - http://localhost/Blog
 */

function getUrl()
{
    return sprintf(
        "%s://%s%s",
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
        $_SERVER['SERVER_NAME'],
        explode('/index.php', $_SERVER['SCRIPT_NAME'])[0]);
}

/**
 *
 * renderRoute()  ------>  Routing System For all the Pages
 *
 */

function renderRoute()
{

    $request = $_SERVER['REQUEST_URI']; //to get current url
    $basePath = explode('/index.php', $_SERVER['SCRIPT_NAME'])[0] | '';

    if ($basePath . '/' === $request) {
        $controller = new Home();
        $controller->render();
    } else {
        //  Not Found Page
        echo '404 Page Not Found';
    }
}

function autoloader()
{
    /**
     * Autoload the Classes with Namespace
     */
    spl_autoload_register(function ($className) {

        # DIRECTORY SEPARATORS varies in various platforms
        $ds = DIRECTORY_SEPARATOR;

        # Current Working Directory
        $dir = __DIR__;

        define('SITE_ROOT', realpath(dirname(__FILE__)));
        # replace namespace separator with directory separator (prolly not required)
        $className = str_replace('\\', $ds, $className);

        # get full name of file containing the required class
        $file = "{$dir}{$ds}{$className}.php";

        # get file if it is readable
        if (is_readable($file)) {
            require_once $file;
        }
    });
}

autoloader();
renderRoute();
