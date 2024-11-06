<?php 
// begins session and alows access to the $_SESSION array superblobal
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Set</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3-theme-cyan.css">
</head>
<body class="w3-theme-l5">
    <div class="w3-container w3-theme-l1 w3-center">
        <h1>Session Examples</h1>
        <h2>Retrieving Session Variables</h2>
    </div>
    <div><?php include "mainMenu.php";?></div>
    <div class="w3-container w3-theme-l4">
        <?php 
        if(isset($_SESSION['id'])){
            echo "Session id: ".$_SESSION['id']."<br>";
        } else{
            echo "Session id is not set!<br>";
        }

        if(isset($_SESSION['fName'])){
            echo "First Name: ".$_SESSION['fName']."<br>";
        } else{
            echo "First Name is not set!<br>";
        
        }

        if(isset($_SESSION['lName'])){
            echo "Last Name: ".$_SESSION['lName']."<br>";
        } else{
            echo "Last Name is not set!<br>";
        }



        ?>
    </div>
    
</body>
</html>