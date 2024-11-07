<?php include "utilFunctions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore - New Publisher Entry</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href='styles.css'>
</head>
<body>
    <div class="w3-container w3-blue-grey">
        <header class="w3-container w3-center">
            <h1>Bookstore</h1>
            <h2>New Publisher</h2>
        </header>
        <?php include 'mainMenu.php' ?>

        <form action="newPublisher.php" class="w3-container w3-sand"
        method="POST">
        <fieldset>
            <label>Name</label>
            <input type="text" class="w3-input w3-border" name="name" maxlength="200" size="200">

            <label>Email</label>
            <input type="text" class="w3-input w3-border" name="email" maxlength="200" size="200">

            <label>Phone Number</label>
            <input type="text" class="w3-input w3-border" name="phoneNumber" maxlength="200" size="200">

        </fieldset>

       <p><input type="submit" class="w3-btn w3-blue-grey" name = "submit" value="Add New Publisher"></p>
</form>
<div class="w3-container w3-sand">
    <?php 
    if(isset($_POST['submit'])){
        if(!isset($_POST['fName']) || 
        !isset($_POST['email']) || 
        !isset($_POST['phoneNumber']) 
        ) {
            echo "<p>You have not entered all the required details.<br/>
            Please go back and try again.</p>";
            exit;
        }
    

    include "connectDatabase.php";

    # create short variable names
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber']);

    $sql = "INSERT INTO publisher (name,  email, phoneNumber)
    VALUES ('$name', '$email', '$phoneNumber')";
    

    if($conn->query($sql) === TRUE){
        $publisher_id = $conn->insert_id;
        echo "<strong>Publisher created sucessfully!</strong><br>";
        echo "Publisher id: $publisher_id<br>";
        echo "Name: $name<br>";
        echo "Email: $email<br>";
        echo "Phone Number: $phoneNumber<br>";
    }
    
    else{
        echo "Error: Unable to create new customer. ".$conn->error."<br>";
        echo $sql;
    }

    $conn->close();
    }

    ?>
        </div>
    </div>
</body>
</html>