<?php

error_reporting(0);

$local = "localhost";
$user = "root";
$password = "";
$db = "test";

$data = mysqli_connect($local, $user, $password, $db);

if($data===false){
    die("Connection Fail!");
}

session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST['uname'];
    $pwd = $_POST['pwd'];

    $sql="select * from user where username = '".$name."' AND
    password='".$pwd."'  ";

    $result=mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);


    if($row["usertype"]=="student"){
        
        $_SESSION['Name']=$name;
        $_SESSION['usertype']='student';

        header("Location: studenthome.php");
    }
    elseif($row["usertype"]=="admin"){

        $_SESSION['Name']=$name;
        $_SESSION['usertype']='admin';

        header("Location: adminhome.php");
    }
    else{
        
        
        $_SESSION['loginMessage']= "Please check your username and password.";

        header('location:login.php');
    
    }
}

$data->close();

?>