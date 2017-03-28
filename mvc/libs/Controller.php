<?php

/**
 * Class Controller
 * @version: 1.0 (Timur)
 * edited: 28/3/2017
 */
class Controller{
    /**
     * @var null|view
     */
    private $view = null;

    /**
     * @var null DB connestion
     */
    private $db = null;
    
    function __construct()
    {    
        //echo 'This is the Controller<br />';
        $this->view = new view();//why is here???
        //$this->loadModel(); // which parameters we send??
       
    }

    /**
     * Open DB connection
     */
    private function openDatabaseConnection(){
        //PDO is consistent interface for accessing databases in PHP.
        //set the options of the PDO connection.like this:$result->user_name
        //@see http://www.php.net/manual/en/pdostatement.fetch.php
        $options = array(PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ, PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING);
       //generate a db connection, using PDO connector
        $this->db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PASS, $options);
    }
    /**
     * Loads the "model"
     * @param $name
     * @return object model
     */
    public function loadModel($name){
        
        $path = 'models/' . $name . '_model.php';
        
        if (file_exists($path)) {
            require 'models/' . $name . '_model.php';
            $modelName = $name . '_model';
            $this->model = new $modelName();
        }
    }
}
