<?php

class Bootstrap {
    
    private $url;
    private $controller;
    
	function __construct() {
        
            $this->parseURL();
		
            $this->initController();
        
            $this->controller->loadModel($this->url[0]);

            $this->callMethod();
		
	}
	
    private function parseURL() {
        $this->url = isset($_GET['url']) ? $_GET['url'] : null;
		$this->url = rtrim($this->url, '/');
		$this->url = explode('/', $this->url);
    }
        
    private function initController()
    {   
        if (empty($this->url[0])) {
			require 'controllers/index.php';
			$this->controller = new Index();
                        return false;
		}
        $file = 'controllers/' . $this->url[0] . '.php';
		if (file_exists($file)) {
			require $file;
                        $this->controller = new $this->url[0];
		} else {
			require 'controllers/error.php';
                        $this->controller = new cError(); 
		}
    }
    
    private function callMethod()
    {
        if (isset($this->url[2])) {
			if (method_exists($this->controller, $this->url[1])) {
				$this->controller->{$this->url[1]}($this->url[2]);
			} else {
				$this->error();
			}
		} else {
			if (isset($this->url[1])) 
                {
				    if (method_exists($this->controller, $this->url[1])) {
                        $this->controller->{$this->url[1]}();
				    } else {
					   $this->error();
				    }
			     } else {
				    $this->controller->index();
                    }
		}	
    }
    
	function error() {
		require 'controllers/error.php';
		$controller = new cError();
		$controller->index();
		return false;
	}

}
