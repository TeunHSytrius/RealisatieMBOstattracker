<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StatTracker</title>
    <link rel="stylesheet" href="./assets/style/main.css">
    <script>
        function uitloggen() {
            var loguit = confirm("Weet u zeker dat u wilt uitloggen?");
            if(loguit) {
                location.href='index.php?page=uitloggen';
            }
        }
    </script>
</head>
<body>
    <div class="header">
        <div class="icon_container">
            <div class="icon">&#x266C;</div>
        </div>
    </div>
    <?php 
        if(isset($_SESSION["ID"]) && $_SESSION["STATUS"] == "ACTIEF") {
            if($_SESSION["ROL"]== 0) {
     ?>
                <div class="user">
                    <p>Welkom terug:</p>
                    <?php echo $_SESSION["USER_NAAM"]; ?>
                </div>
                <div class="nav">
                    <ul>
                        <li onclick="location.href='index.php?page=profiledit'">Profiel</li>
                        <li onclick="uitloggen()">Uitloggen</li>
                    </ul>
                </div>
    <?php
            }elseif($_SESSION["ROl"] == 1) {
    ?>
             <div class="user">
                    <p>Welkom terug admin:</p>
                    <?php echo $_SESSION["USER_NAAM"]; ?>
                </div>
                <div class="nav-admin">
                    <ul>
                        <li onclick="location.href='index.php?page=profiledit'">Profiel</li>
                        <li onclick="uitloggen()">Uitloggen</li>
                    </ul>
                </div>
    
    <?php
            }
        }
    
    ?>
</body>
</html>