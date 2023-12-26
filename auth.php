<?php

session_start();

if(!isset($_SESSION['Name'])){
    
    header('location:login.php');

}elseif($_SESSION['usertype']=='student') {
    
    header('location:login.php');

}