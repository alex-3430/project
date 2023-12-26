<?php

include 'auth.php';


if(!isset($_SESSION['Name'])){
    
    header('location:login.php');

}elseif($_SESSION['usertype']=='student') {
    
    header('location:login.php');

}

$local = "localhost";
$user = "root";
$password = "";
$db = "test";

$data = mysqli_connect($local, $user, $password, $db);

$sql="SELECT * FROM contact ";

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
        <h1>Apply Form</h1>
        <table border=" 1px">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {             
                while($row = $result->fetch_assoc()) {                
            ?>
                <tr>
                    <td style="padding:20px" ><?php echo $row['ID']; ?></td>
                    <td style="padding:20px"><?php echo $row['Name']; ?></td>
                    <td style="padding:20px"><?php echo $row['Email']; ?></td>
                    <td style="padding:20px"><?php echo $row['phone']; ?></td>
                    <td style="padding:20px"><?php echo $row['message']; ?></td>
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