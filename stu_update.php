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

$sql = "SELECT * FROM user WHERE Id='$id'";

$result = mysqli_query($data, $sql);

$info = $result-> fetch_assoc(); 

if(isset($_POST['update'])){

    $name = $_POST['uname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['pwd'];

    $quary = "UPDATE user SET username='$name', email='$email', phone='$phone', password='$password' WHERE Id = '$id'";

    $result2=mysqli_query($data, $quary);

    if($result2){
        header("location:view_student.php");
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
        <h1>Update Student</h1>
        
        <form action="#" method="POST" class="addstudent">


    
        <div>
            <label ><b>Username</b></label>
            <input type="text" value="<?php echo "{$info['username']}"; ?>" placeholder="Enter Username" id='uname' name="uname" required>

        </div>
        <div>
            <label ><b>Phone</b></label>
            <input type="text" value="<?php echo "{$info['phone']}"; ?>" placeholder="Enter Phone Number" id='phone' name="phone" required>

        </div>
        <div>
            
            <label ><b>Email</b></label>
            <input type="text" value="<?php echo "{$info['email']}"; ?>" placeholder="Enter Email Address" id='email' name="email" required>

        </div>
        <div>
            <label for="pwd"><b>Password</b></label>
            <input type="password"  value="<?php echo "{$info['password']}"; ?>" placeholder="Enter Password" id='pwd' name="pwd" required>
       
        </div>
        
        <div>
            <input class="btn btn-primary" type="submit" name="update" value="Updte">

        </div>
         
        </form>
        </center>
    </div>
    
</body>
</html>