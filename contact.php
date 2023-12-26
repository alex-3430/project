<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
        .containerC {
    max-width: 800px;
    margin: 0 auto;
    padding-top: 70px;
    text-align: center;
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size:20px;
        }

.contact-optionC {
    background-color: #f4f4f4;
    padding: 40px;
    margin-bottom: 20px;
}
.contact{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    column-gap: 50px;
    row-gap: 50px;
    margin-top: 50px;
}
button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
}

button:hover {
    background-color: #a04591;
}

button a{
    text-decoration: none;
}
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

    <main>
        <div class="containerC">
            <h1>Contact Us</h1>
            <br>

            <p>Our business hours are 9 AM-6 PM ET Monday - Friday and 9 AM-5 PM ET on weekends.</p>
            <div class="contact">
                <div class="contact-optionC">
                    <h2>Phone Call</h2>
                    <br>
                    <p>We support make the Phone Call to contact us within 9AM to 5PM.</p><br><br>
                    <button><a href="tel:+959758628343"> Phone Call</a> </button>
                </div>
                <div class="contact-optionC">
                    <h2>Email Support</h2><br>
                    <p>Prefer to email? Send us an email and we'll get back to you soon.</p><br><br>
                    <button><a href="mailto:arkarherry0@gmail.com">Send email</a> </button>
                </div>
            </div>
    
        </div>
    </main>
    <footer>
        <?php
    
        $request_method = strtoupper($_SERVER['REQUEST_METHOD']);
    
        require __DIR__ . '/footer.php';
        ?>
</footer>
</body>
</html>