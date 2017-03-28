<?php

Class Help extends Controller {
    
    function __construct() {
        parent::__construct();
    }
    function index(){
        $this->view->render('help/index'); // add (#,1) o disable #header and #footer
    }
    public function other($arg = false) {
        
        require 'models/help_model.php';
        $model = new Help_Model();
        $this->view->blah = $model->blah();
    }
}