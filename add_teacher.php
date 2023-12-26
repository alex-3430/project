<?php


include 'auth.php';


$local = "localhost";
$user = "root";
$password = "";
$db = "test";

$data = mysqli_connect($local, $user, $password, $db);

if($data===false){
    die("Connection Fail!");
}

if(isset($_POST['name'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $class = $_POST['class'];
    $img =  $_FILES["pic"]["name"];
    move_uploaded_file($_FILES["pic"]["tmp_name"],"image/". $_FILES["pic"]["name"]);

    $dir_img = "image/" . $_FILES["pic"]["name"];


    $check="SELECT * FROM teacher WHERE Name = '$name'";

    $check_user=mysqli_query($data, $check);

    $row_count= mysqli_num_rows($check_user);

    if($row_count == 1){

        echo "<script>
        alert('Teacher Name already exsited!')
        </script>";
    }
    else{

    $sql="INSERT INTO teacher (Name, phone, email, Subject, Class, photo) VALUES ('$name','$phone', '$email' ,'$subject','$class', '$dir_img' ) ";

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
        <h1>Add Teacher</h1>
        
        <form action="#" method="POST" class="addstudent" enctype="multipart/form-data">


    
        <div>
            <label><b>Name</b></label>
            <input type="text" value="" placeholder="Enter Name" id='name' name="name" required>

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
            
            <label ><b>Subject</b></label>
            <input type="text" value="" placeholder="Enter Subject" id='subject' name="subject" required>

        </div>
        <div>
            
            <label><b>Class</b></label>
            <input type="text" value="" placeholder="Enter Class" id='class' name="class" required>

        </div>
        
        <div>
            
            <label class='image'><b>Image</b></label>
            <input type="file" name="pic" class='img' >

        </div>
        
        <div>
            <input class="btn btn-primary" type="submit" name="submit" value="ADD">

        </div>
         
        </form>
        </center>
    </div>
    
</body>
</html>