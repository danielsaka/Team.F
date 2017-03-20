<?php

class database{
    
    private $connection;
    private $table;
    private $error;
    
    
    //connect database server
    function connect($host,$username,$password,$database,$table){
        $this->connection = mysqli_connect($host,$username,$password);
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_errno();
        }
        $this->table = mysqli_select_db($this->connection,$database);
        if (!$this->table){
        die("Database selection failed:: " . mysqli_connect_errno());
        }
        $this->table = $table;
    }
    
    //Create Login form
    function showLoginForm()
    {
        if ($this->error){
            echo("<h1 align='center'>".$this->error."</h1>");
        }
       return (' <form action="" method="post"><h1 align="center">Login form<h1>
       <table align="center"
       <tr><td>Name</td><td><input type="text" name="username"></td></tr>
       <tr><td>Password</td><td><input type="password" name="password"></td></tr>
       <tr><td><input type="submit" name="submit" value="login"></td>
       <tr><td><input type="submit" name="register" value="register"></td>
       <td><input type="reset" name="reset" value="reset"></td></tr>
       </table></form>'); 
    }
    
    // Logging in for existing users
    public function login($username,$password){
        $query = "SELECT * FROM ". $this->table . " WHERE username='".$username ."' AND password='".$password ."'";
        $result = mysqli_query($this->connection,$query);
        $numrows = mysqli_num_rows($result);
        return !($numrows==0);
    }
    // Register new users
    public function register($username,$password){
        // check if user already exists
        if ($this->login($username,$password)){
            return false;
        } // register new user
        $query = "INSERT INTO ".$this->table. "(username,password) VALUES ('$username','$password')";
        $result = mysqli_query($this->connection,$query);
        return ($result);
    }
    public function setError($error_msg){
        $this->error = $error_msg;
    }
}
