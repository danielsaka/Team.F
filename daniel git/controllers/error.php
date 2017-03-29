<?php

class Errord extends controller {

    function __construct() {
        parent::__construct();
    }

    function Index() {
        $this->View->msg = 'This Page doesnt exist';
        $this->View->render('error/index');
    }

}
