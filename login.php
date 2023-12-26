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
        <div class="head">Login Form</div>  
</header>

<center>
<form action="login_check.php" method="POST">
    <div class="imgcontainer">
        <img src="./image/cocacola.png" alt="Avatar" class="avatar">
    </div>

    <div class="logincontainer">
        <div>
        <label ><b>Username</b></label>
        <input type="text" value="" placeholder="Enter Username" id='uname' name="uname" >

        </div>
        <div>
        <label for="psw"><b>Password</b></label>
        <input type="password" value="" placeholder="Enter Password" id='pwd' name="pwd" >
        
        </div>
        <h4>

            <?php
             error_reporting(0);

            session_start();
            session_destroy();

            echo $_SESSION['loginMessage'];
            ?>
        </h4>

        <input type="submit"class="button" value="Login">
    
        <div class="register">
            <label>Don't still have an account</label>
            <a href="register.php">Register Now</a>
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
