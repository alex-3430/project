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
<center>
    <div class="section1">
        <h1>Admission form</h1>
    </div>
    </center>   
    <div align="center" class="admission_form">
        <form action="data_check.php" method="POST">
            <div class="form">
                <label class="labeltext">Name</label>
                <input class="input_deg" type="text" name="name" id="name" require>
            </div>
            <div class="form">
                <label class="labeltext">Email</label>
                <input class="input_deg" type="text" name="email" id="email" require>
            </div>
            <div class="form">
                <label class="labeltext">Phone</label>
                <input class="input_deg" type="number" name="phone" id="phone" require>
            </div>
            <div class="form">
                <label class="labeltext">Message</label>
                <textarea class="input_txt" name="message" id="message" require></textarea>

            </div>
            <div class="form">
                <input type="submit" name="apply" class="btn btn-primary" id="submit" value="Apply">
            </div>
        </form>

    </div>
    <footer>
        <?php
    
        $request_method = strtoupper($_SERVER['REQUEST_METHOD']);
    
        require __DIR__ . '/footer.php';
        ?>
    </footer>

    
</body>
</html>