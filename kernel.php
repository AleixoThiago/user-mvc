<?php
    $_DIR = $_SERVER['DOCUMENT_ROOT'];
    require("{$_DIR}/vendor/autoload.php");
    require("{$_DIR}/config.php");
    session_start();

    // if (!APP_PROD) {
    //     error_reporting(E_ALL);
    //     ini_set('display_errors', TRUE);
    //     ini_set('display_startup_errors', TRUE);
    // }

    define('METHOD', (!empty($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD']));
    define('ID', (!empty($_SERVER['PATH_INFO']) ? substr($_SERVER['PATH_INFO'], 1) : null));
    if (!empty($_POST['_method'])) unset($_POST['_method']);

    function dd($array) {
        var_dump(print_r($array));
        die;
    }

    function asset($path) {
        return HTTP_TYPE . "{$_SERVER['HTTP_HOST']}/assets/{$path}";
    }

    function route($path) {
        if (APP_PROD) {
            $parts = explode('/',$path);
            $path = '';
            foreach ($parts as $key => $url) {
                if ((count($parts) - 1) == $key && $url > 0) $path .= "index.php/{$url}";
                else $path .= "{$url}/";
            }
        }
        return HTTP_TYPE . "{$_SERVER['HTTP_HOST']}/routes{$path}";
    }

    function redirecionar($path) {
        if (APP_PROD) {
            $parts = explode('/',$path);
            $path = '';
            foreach ($parts as $key => $url) {
                if ((count($parts) - 1) == $key && $url > 0) $path .= "index.php/{$url}";
                else $path .= "{$url}/";
            }
        }
        header("Location: /routes{$path}");
    }