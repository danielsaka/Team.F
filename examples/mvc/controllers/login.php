<?php

Class Login extends Controller{
    
    function __construct(){
        parent::__construct();
    }
    
    function index(){
        
        $this->view->render('login/index'); // add (#,1) o disable #header and #footer
    }
    
    function run()
    {
        $this->model->run();
    }
}