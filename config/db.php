<?php

/**
 * Created by PhpStorm.
 * User: Timur
 * Date: 3/18/2017
 * Time: 1:22 PM
 * data base connection class
 */
class db
{
    private $db;

    public function __construct($host,$user,$pass,$db){
        $this->db = mysqli_connect($host,$user,$pass);
        if(!$this->db){
            exit("No data base connection");
        }
        if(!mysqli_select_db($db,$this->db)){
            exit("No table");
        }

        mysqli_query("SET NAMES cp-1251");

        return $this->db;
    }

    public function get_all_db(){

    }
    public function get_one_db(){

    }
}