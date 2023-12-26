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

if(isset($_POST['apply'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql="INSERT INTO contact (Name, Email, phone, message)
        values ('$name', '$email', '$phone', '$message')";

    $result = mysqli_query($data, $sql);

    if($result){
        $_SESSION['message']='your apply is successful!!';

        header("location:index.php");
    }else{
        echo "Apply Fail!!";
    }
}

?>