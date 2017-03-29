<?php

class Index extends controller {

    function __construct() {
        parent::__construct();
    }

    function Index() {
        echo 'inside index inedex';
        $this->View->render('index/index');
    }
    function details(){
         $this->View->render('index/index');
    }

}
