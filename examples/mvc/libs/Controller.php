<?php

class Controller{
    
    function __construct(){
        //echo 'This is the Controller<br />';
        $this->view = new view();
       
        }
    
    public function loadModel($name){
        
        $path = 'models/' . $name . '_model.php';
        
        if (file_exists($path)) {
            require 'models/' . $name . '_model.php';
            $modelName = $name . '_model';
            $this->model = new $modelName();
        }
    }
}


?>