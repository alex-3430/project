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
else{
    
$id = $_GET['Id'];

$sql = "SELECT * FROM courses WHERE Id='$id'";

$result = mysqli_query($data, $sql);

$info = $result->fetch_assoc(); 

if(isset($_POST['update'])){

    $course = $_POST['course'];
    $teacher_id = $_POST['teacher_id'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $img =  $_FILES["pic"]["name"];
    move_uploaded_file($_FILES["pic"]["tmp_name"],"image/". $_FILES["pic"]["name"]);

    $dir_img = "image/" . $_FILES["pic"]["name"];
    $quary = "UPDATE courses SET course='$course', teacher_id='$teacher_id', start_time='$start_time', end_time='$end_time', start_date ='$start_date', end_date='$end_date',photo='$dir_img'  WHERE Id = '$id'";

    $result2=mysqli_query($data, $quary);


    if($result2){
        header("location:view_courses.php");
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
    <style>
        label{
        display: inline-block;
        text-align: right;
        width: 100px;
        padding-top: 10px;
        padding-bottom: 10px;
        }
        .addstudent{
        background-color: aqua;
        width:500px;
        padding:20px;
        }
    </style>

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
        <h1>Update courses Data</h1>
        
        <form action="#" method="POST" class="addstudent">


    
        <div>
            <label ><b>Course</b></label>
            <input type="text" value="<?php echo "{$info['course']}"; ?>" placeholder="Enter Name of course" id='course' name="course" required>

        </div>
        <div>
            <label ><b>Teacher_id</b></label>
            <input type="number" value="<?php echo "{$info['teacher_id']}"; ?>" placeholder="Enter teacher id" id='teacher_id' name="teacher_id" required>

        </div>
        <div>
            
            <label ><b>Start_Time</b></label>
            <input type="time" value="<?php echo "{$info['start_time']}"; ?>" placeholder="Enter Start Time" id='start_time' name="start_time" required>

        </div>
        
        <div>
            
            <label ><b>End Time</b></label>
            <input type="time" value="<?php echo "{$info['end_time']}"; ?>" placeholder="Enter End Time" id='end_time' name="end_time" required>

        </div>
        <div>
            
            <label><b>Start Date</b></label>
            <input type="date" value="<?php echo "{$info['start_date']}"; ?>" placeholder="Enter Start Date" id='start_date' name="start_date" required>

        </div>
        <div>
            
            <label><b>End Date</b></label>
            <input type="date" value="<?php echo "{$info['end_date']}"; ?>" placeholder="Enter End Date" id='end_date' name="end_date" required>

        </div>
        
        <div>
            
            <label class='image'><b>Image</b></label>
            <input type="file" name="pic" class="img" value="<?php echo "{$info['photo']}"; ?>">

        </div>
        
        <div>
            <input class="btn btn-primary" type="submit" name="update" value="Update">

        </div>
         
        </form>
        </center>
    </div>
    
</body>
</html>