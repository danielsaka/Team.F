<?php

class Login extends controller {

    function __construct() {
        parent::__construct();
    }

    function Index() {
        $this->View->render('login/index');
    }

}
