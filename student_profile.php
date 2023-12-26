<?php


include 'auth_stu.php';



$local = "localhost";
$user = "root";
$password = "";
$db = "test";

$data = mysqli_connect($local, $user, $password, $db);

$name = $_SESSION['Name'];
$sql="SELECT * FROM `user` Where username= '$name' ";

$result=mysqli_query( $data, $sql);

$row = $result->fetch_assoc();
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

include 'student_sidebar.php';

?>
    <center>
    <div class="profile">
        <h1>Your Profile</h1>
        <table>
            <tr>
                <td>Student_ID </td>
                <td>:</td>
                <td><?php echo $row['Id']?></td>
            </tr>
            <tr>
                <td>Username </td>
                <td>:</td>
                <td><?php echo $row['username']?></td>
            </tr>
            <tr>
                <td>Email </td>
                <td>:</td>
                <td><?php echo $row['email']?></td>
            </tr>
            <tr>
                <td>Phone </td>
                <td>:</td>
                <td><?php echo $row['phone']?></td>
            </tr>
        </table>
    </div>
    </center>
</body>
</html>