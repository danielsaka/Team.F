<?php

class View{
    
    function __construct(){
        echo 'TEAM F PROJECT <br /><br />';
    }
    
    public function render($name, $noInclude = false)
        //render to a controller, add '1' to disable header & footer
    {
        if ($noInclude == true){
            require 'views/' . $name . '.php';
        }
        else{        
            require 'views/header.php';
            require 'views/' . $name . '.php';
            require 'views/footer.php';
        }
    }
}