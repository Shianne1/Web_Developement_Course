<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Example</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-cyan.css">
</head>
<body class = "w3-theme-l5">
    <div class="w3-container w3-theme-l1 w3-center">
        <h1>Cookies Example</h1>
        <h2>Retrieving Cookies</h2>
    </div>
    <div>
        <?php include "mainMenu.php"; ?>
    </div>
    <div class="w3-container w3-theme-l4">
        <?php 
        if(!isset($_COOKIE['favColor'])){
            echo "Cookie name favColor is not set!<br>";
        } else {
            echo "Cookie favColor is set!<br>";
            echo "Value is: ".$_COOKIE['favColor']."<br><br>";
        }

        if(!isset($_COOKIE['favAnimal'])){
            echo "Cookie name favAnimal is not set!<br>";
        } else {
            echo "Cookie favAnimal is set!<br>";
            echo "Value is: ".$_COOKIE['favAnimal']."<br><br>";
        }

        if(!isset($_COOKIE['favSchool'])){
            echo "Cookie name favSchool is not set!<br>";
        } else {
            echo "Cookie favSchool is set!<br>";
            echo "Value is: ".$_COOKIE['favSchool']."<br><br>";
        }

        if(!isset($_COOKIE['favTeam'])){
            echo "Cookie name favTeam is not set!<br>";
        } else {
            echo "Cookie favTeam is set!<br>";
            echo "Value is: ".$_COOKIE['favTeam']."<br><br>";
        }
        ?>
    </div>
    
</body>
</html>