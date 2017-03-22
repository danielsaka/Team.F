<?php

class cError extends Controller {
    
    function __construct(){
        parent::__construct();
        echo 'This is an Error';
        
        $this->view->msg = "This page doesnt exist";
        $this->view->render('error/index');
    }
}