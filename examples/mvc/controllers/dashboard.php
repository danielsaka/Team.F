<?php

Class Dashboard extends Controller{
    
    function __construct(){
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        if ($logged == false){
            Session::destroy();
            header('Location: ../login');
            exit;
        }
    }
    
    function index()
    { 
        $this->view->render('dashboard/index'); // add (#,1) o disable #header and #footer
    }
    
    function logout()
    {
        Session::destroy();
        header('Location: ../login');
        exit;
    }
    
    
}