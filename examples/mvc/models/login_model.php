<?php

class Login_Model extends Model
{
    public function __construct(){
        parent::__construct();
    }
    
    public function run()
    {   
        
        $sql = $this->db->prepare("SELECT id FROM users WHERE login = :login AND password = :password"); //PDO commands, cleans query
        $sql->execute(array(
            ':login' => $_POST['login'],
            ':password' => $_POST['password']
        ));
        
        //$data = $sql->fetchAll();
        $count =  $sql->rowCount();
        if ($count > 0){
            //login
            Session::init();
            Session::set('loggedIn', true);
            Session::set('username', $_POST['login']); // extra
            header('Location: ../dashboard');
        } else {
            header('Location: ../login');
        }
        
    }
}