<?php
require "./config/dbconn.php"; //Vereist dbconn.php dit bevat de database connectie


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
</head>
<body>
    <div class="content">
        <form action="" method="post" name="inloggen">
            <h1>Login</h1>
            <input type="email" name="e-mail" placeholder="bij@voorbeeld.com">
            <input type="password" name="wachtwoord" placeholder="wachtwoord">
            <input type="submit" value="login">
            <a href="registration.php">Registreren</a>
        </form>
    </div>
    <?php
    if(isset($_POST["submit"])) {
        $melding = "";
        $mail = htmlspecialchars($_POST["e-mail"]);
        $pw = htmlspecialchars($_POST["wachtwoord"]);
    }
    ?>


</body>
</html>