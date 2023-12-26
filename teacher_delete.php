<?php

session_start();
// error_reporting(0);

$local = "localhost";
$user = "root";
$password = "";
$db = "test";

$data = mysqli_connect($local, $user, $password, $db);

if($_GET['Id']){

    $deleteid = $_GET['Id'];
    $sql = "DELETE FROM teacher WHERE id=$deleteid ";
    $result = mysqli_query($data, $sql);
    
    if($result){

        $_SESSION['sus'] = 'Deleted Successfully!';
        header("location:view_teacher.php");

    }
    
}


?>