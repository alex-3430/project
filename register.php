<?php

session_start();
session_destroy();
error_reporting(0);

$local = "localhost";
$user = "root";
$password = "";
$db = "test";

$data = mysqli_connect($local, $user, $password, $db);

if($data===false){
    die("Connection Fail!");
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST['uname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $usertype = 'student';

    $check="SELECT * FROM user WHERE username = '$name'";

    $check_user=mysqli_query($data, $check);

    $row_count= mysqli_num_rows($check_user);

    if($row_count == 1){

        echo "<script>
        alert('Usernmae already exsited!')
        </script>";

    }
    else{

    $sql="INSERT INTO user (username, phone, email, usertype, password) VALUES ('$name','$phone', '$email' , '$usertype', '$pwd') ";

    $result=mysqli_query($data,$sql);

    if($result){
        echo "<script>
        alert('Register Successfully. Please Login!')
        </script>";

    
    }
    else{
        echo "<script>
        alert('Register Fail, try again!')
        </script>";

    
    }
}

}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<style>
    header{
        background-color: aqua;
        line-height: 80px;
        padding-left: 30px;
    }
    .head{
        position: relative;
        text-align: center;
        top: 5px;
        bottom: 20px;
        font-family: "Bickham Script Pro Regular";
        font-size: 60px;
        font-weight: bold;
        color:red;
    }
    
</style>
</head>
<body>

<header class="header">
        <div class="head">Register Form</div>  
</header>

<center>
<form action="#" method="POST">
    <div class="imgcontainer">
        <img src="./image/cocacola.png" alt="Avatar" class="avatar">
    </div>

    <div class="logincontainer">
        <div>
        <label ><b>Username</b></label>
        <input type="text" value="" placeholder="Enter Username" id='uname' name="uname" required>
        </div>
        <div> 
        <label ><b>Phone</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" value="" placeholder="Enter Phone Number" id='phone' name="phone" required>
        </div>
        <div>
        <label ><b>Email</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" value="" placeholder="Enter Email Address" id='email' name="email" required>
        </div>
        <div>
        <label ><b>Password</b></label>
        <input type="password" value="" placeholder="Enter Password" id='pwd' name="pwd" required>
        </div>

        

        <input type="submit" class="button" value="Register">
    
        <div class="register">
            <label>Already Have An Account</label>
            <a href="login.php">login</a>
        </div>
        <br>
        <br>
        <div class="register">
            <label>Go to </label>
            <a href="index.php">Home </a>
            <label>Page </label>
        </div>
    </div>
</form>
</center>
<footer>
        <?php
    
        $request_method = strtoupper($_SERVER['REQUEST_METHOD']);
    
        require __DIR__ . '/footer.php';
        ?>
</footer>

</body>
</html>
