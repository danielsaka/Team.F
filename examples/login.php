<?php
//import db file
include ('db.php');
$obj = new database; 
$obj->connect('localhost','root','','loading','userlogin')
            //   host     username   db-name   table-name
?>

<html>

<head>
    <title> Login form </title>
</head>

<body>
<?php  

// login for existing users on the system
if(isset($_POST['submit'])){
    if($obj->login($_POST['username'],$_POST['password'])){
        echo("<h1 align='center'>:) You are inside system</h1>");
        }
    else{
        $obj->setError("User Does Not Exist");
        echo($obj->showLoginForm());
        }
}
// register new users into the system
else if(isset($_POST['register'])){
    if($obj->register($_POST['username'],$_POST['password'])){
        echo("<h1 align='center'>:) You are now registered</h1>");
        }
    else{
        $obj->setError("User Already Exist");
        echo($obj->showLoginForm());
        }
}
else{ // in case of some error, redirect to login page
    echo ($obj->showLoginForm());
}
?>
</body>
</html>
