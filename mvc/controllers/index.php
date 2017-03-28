<?php

Class Index extends Controller{
    
    function __construct(){
        parent::__construct();
    }
    function index()
    {
        $this->view->render('index/index'); // add (#,1) o disable #header and #footer
    }
}