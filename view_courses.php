<?php


include 'auth.php';

error_reporting(0);



$local = "localhost";
$user = "root";
$password = "";
$db = "test";

$data = mysqli_connect($local, $user, $password, $db);

$sql="SELECT * FROM `courses`";

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
        <h1>Courses</h1>

        <?php 
            echo $_SESSION['sus'];
        ?>

        <table border=" 1px">
            <tr>
                <th>ID</th>
                <th>Course</th>
                <th>Teacher id</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Photo</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {             
                while($row = $result->fetch_assoc()) {                
            ?>
                <tr>
                    <td><?php echo $row['Id']; ?></td>
                    <td><?php echo $row['course']; ?></td>
                    <td><?php echo $row['teacher_id']; ?></td>
                    <td><?php echo $row['start_time']; ?></td>
                    <td><?php echo $row['end_time']; ?></td>
                    <td><?php echo $row['start_date']; ?></td>
                    <td><?php echo $row['end_date']; ?></td>
                    <td><img style="width:70px" src="<?php echo $row['photo'];?>" ></td>
                    <td><?php echo "<a  onClick=\" JavaScript:return confirm('Are you sure to delete this');\" href='courses_delete.php?Id={$row['Id']}' class='btn btn-danger'> Delete</a>";
                         ?>
                    </td>
                    <td style="padding:20px"><?php echo "<a  class='btn btn-primary' href='courses_update.php?Id={$row['Id']}'> Update</a>";
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