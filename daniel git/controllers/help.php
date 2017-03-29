<?php

class Help extends controller {

    function __construct() {
        parent::__construct();
        
    }
    function Index(){
       $this->View->render('help/index'); 
    }
    

    public function other($arg=false){
      
        require 'models/help_model.php';
        $model= new help_model();
        $this->View->blah=$model->blah();
    }

}