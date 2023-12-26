<?php

include 'auth.php';


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
        alert('Added successfully.')
        </script>";

    
    }
    else{
        echo "<script>
        alert('Added Fail, try again!')
        </script>";
    
    }
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 

    <link rel="stylesheet" href="admin.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    
    <?php

    include 'admin_sidebar.php';

    ?>

 

    <div class="content">
    <center>
        <h1>Add Student</h1>
        
        <form action="#" method="POST" class="addstudent">


    
        <div>
            <label ><b>Username</b></label>
            <input type="text" value="" placeholder="Enter Username" id='uname' name="uname" required>

        </div>
        <div>
            <label ><b>Phone</b></label>
            <input type="text" value="" placeholder="Enter Phone Number" id='phone' name="phone" required>

        </div>
        <div>
            
            <label ><b>Email</b></label>
            <input type="text" value="" placeholder="Enter Email Address" id='email' name="email" required>

        </div>
        <div>
            <label for="psw"><b>Password</b></label>
            <input type="password"  value="" placeholder="Enter Password" id='pwd' name="pwd" required>
       
        </div>
        
        <div>
            <input class="btn btn-primary" type="submit" value="ADD">

        </div>
         
        </form>
        </center>
    </div>
    
</body>
</html>