<?php


include 'auth.php';
error_reporting(0);



$local = "localhost";
$user = "root";
$password = "";
$db = "test";

$data = mysqli_connect($local, $user, $password, $db);

$sql="SELECT * FROM `user` Where usertype = 'student' ORDER BY `Id`";

$result=mysqli_query( $data, $sql);


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
        <h1>Student's Information</h1>

        <?php 
            echo $_SESSION['message'];
        ?>

        <table border=" 1px">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {             
                while($row = $result->fetch_assoc()) {                
            ?>
                <tr>
                    <td><?php echo $row['Id']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo "<a  onClick=\" JavaScript:return confirm('Are you sure to delete this');\" href='stu_delete.php?Id={$row['Id']}' class='btn btn-danger'> Delete</a>";
                         ?>
                    </td>
                    <td style="padding:20px"><?php echo "<a  class='btn btn-primary' href='stu_update.php?Id={$row['Id']}'> Update</a>";
                         ?>
                    </td>
                </tr>
            <?php                            
                }          
            }else {             
                printf('No record found.<br />');          
            } 
            ?>
        </table>
    </div>
</body>
</html>