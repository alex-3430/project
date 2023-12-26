<?php

session_start();
error_reporting(0);
session_destroy();

if($_SESSION['message']){
    $message = $_SESSION['message'];

    echo "<script>
        alert('$message')
        </script>";
}


    $local = "localhost";
    $user = "root";
    $password = "";
    $db = "test";
        
    $data = mysqli_connect($local, $user, $password, $db);
        
    if($data===false){
        die("Connection Fail!");
    }

    $sql="SELECT * FROM `teacher`";
    $sql1="SELECT * FROM `courses`";

    $result=mysqli_query( $data, $sql);
    $result1=mysqli_query( $data, $sql1);

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<style>
    .logo{
        font-family: "Bickham Script Pro Regular";
        font-size: 50px;
    }
</style>
</head>
<body>
    <nav>
        <label class="logo">CocaCola Universtry</label>

        <ul>
            <li><a href="index.php">Home</a><li>
            <li><a href="contact.php">Contact</a><li>
            <li><a href="admission_index.php">Admission</a><li>
            <li><a href="login.php" class="btn btn-success">Login</a><li>
        </ul>
    </nav>

    <div class="section1">
        <label class="imgtext">Be Educated, Be A Good Achiever.</label>
        <img src="image\schoolWelcome.avif" class="main_img">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="image\schoolbuilding.webp" class="welcome_img">
            </div>
            <div class="col-md-8">
                <h1>
                    Welcome To CocaCola Universtry
                </h1>
                <p>Discover the fascinating cultural significance of Coca-Cola in different parts of the world, including its role as a social lubricant and its association with various religious festivals.
                Delve into the unique history of Coca-Cola, covering the product's inception, evolution, and revolutionary impact.
                Enhance your understanding of the unique taste of Coca-Cola by exploring its secret formula, a closely guarded industry secret for over a century.
                </p>
            </div>
        </div>
    </div>

    <div class="teacherH">
        <h1>Our Teachers</h1>
    </div>

    <div class="container">
        <div class="row">
            <?php
                while($row = $result->fetch_array()){
            ?>
            <div class="col-md-4">
                <img src="<?php echo "{$row['photo']}";   ?>" class="teacher">
                <h4><?php echo "{$row['Name']}";   ?></h4>
                <p>Subject :<?php echo "{$row['Subject']}";   ?></p>
                <p>Class :<?php echo "{$row['Class']}";   ?></p>
                <p>Email :<?php echo "{$row['email']}";   ?></p>
                <p>Phone :<?php echo "{$row['phone']}";   ?></p>

            </div>
            <?php
                }
            ?>
        </div>
    </div>


    <div class="teacherH">
        <h1>Our Courses</h1>
    </div>

    <div class="container">
        <div class="row">
            <?php
                while($row1 = $result1->fetch_array()){
            ?>
            <div class="col-md-4">
                <img src="<?php echo "{$row1['photo']}";   ?>" class="teacher">
                <h4><?php echo "{$row1['course']}";   ?></h4>
                <p>Start Date :<?php echo "{$row1['start_date']}";   ?></p>
                <p>End Date :<?php echo "{$row1['end_date']}";   ?></p>
                <p>Start Time :<?php echo "{$row1['start_time']}";   ?></p>
                <p>End Time :<?php echo "{$row1['end_time']}";   ?></p>

            </div>
            <?php
                }
            ?>
        </div>
    </div>


    <footer>
        <?php
    
        $request_method = strtoupper($_SERVER['REQUEST_METHOD']);
    
        require __DIR__ . '/footer.php';
        ?>
    </footer>

    
</body>
</html>