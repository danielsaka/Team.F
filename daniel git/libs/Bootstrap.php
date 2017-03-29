<?php

class Bootstrap {

    function __construct() {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        print_r($url);
        $file = 'controllers/' . $url[0] . '.php';
        print_r($file);
        
        if (empty($url[0])) {
            require 'controllers/index.php';
            $controller = new Index();
            $controller->Index();
            return FALSE;
        }

      if (file_exists($file)) {
            require $file;
        } else {
          require 'controllers/error.php';
          $controller = new Errord();
            return FALSE;
       }
        $controller = new $url[0];
        if (isset($url[2])) {
            if (method_exists($controller, $url[1])) {
                $controller->{$url[1]}($url[2]);
            }
            else{
                echo 'errrrrr';
            }
        } else {
            if (isset($url[1])) {
                $controller->{$url[1]}();
            } else {
                $controller->Index();
            }
        }
    }

}
