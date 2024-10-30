<?php include "utilFunctions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore - New Customer Entry</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="w3-container w3-blue-grey">
        <header class="w3-container w3-center">
            <h1>Bookstore</h1>
            <h2>New Customer</h2>
        </header>
        <?php include 'mainMenu.php' ?>

        <form action="newCustomer.php" class="w3-container w3-sand"
        method="POST">
        <fieldset>
            <label>First Name</label>
            <input type="text" class="w3-input w3-border" name="fName" maxlength="200" size="200">

            <label>Last Name</label>
            <input type="text" class="w3-input w3-border" name="lName" maxlength="200" size="200">

            <label>Email</label>
            <input type="text" class="w3-input w3-border" name="email" maxlength="200" size="200">

            <label>Phone Number</label>
            <input type="text" class="w3-input w3-border" name="phoneNumber" maxlength="200" size="200">

            <label>Address</label>
            <input type="text" class="w3-input w3-border" name="address" maxlength="200" size="200">

            <label>City</label>
            <input type="text" class="w3-input w3-border" name="city" maxlength="40" size="40">

            <label>State</label>
            <input type="text" class="w3-input w3-border" name="state" maxlength="2" size="2">

            <label>Zip</label>
            <input type="text" class="w3-input w3-border" name="zip" maxlength="12" size="12">

        </fieldset>

       <p><input type="submit" class="w3-btn w3-blue-grey" name = "submit" value="Add New Customer"></p>
</form>
<div class="w3-container w3-sand">
    <?php 
    if(isset($_POST['submit'])){
        if(!isset($_POST['fName']) || 
        !isset($_POST['lName']) || 
        !isset($_POST['email']) || 
        !isset($_POST['phoneNumber']) || 
        !isset($_POST['address']) || 
        !isset($_POST['city']) || 
        !isset($_POST['state']) ||
        !isset($_POST['zip'])) {
            echo "<p>You have not entered all the required details.<br/>
            Please go back and try again.</p>";
            exit;
        }
    

    include "connectDatabase.php";

    # create short variable names
    $fName = mysqli_real_escape_string($conn, $_POST['fName']);
    $lName = mysqli_real_escape_string($conn, $_POST['lName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $zip = mysqli_real_escape_string($conn, $_POST['zip']);

    $sql = "INSERT INTO customer (firstName, lastName, email, phoneNumber, address, city, state, zip)
    VALUES ('$fName', '$lName', '$email', '$phoneNumber', '$address', '$city', '$state', '$zip')";
    

    if($conn->query($sql) === TRUE){
        $customer_id = $conn->insert_id;
        echo "<strong>Customer created sucessfully!</strong><br>";
        echo "Customer id: $customer_id<br>";
        echo "First name: $fName<br>";
        echo "Last name: $lName<br>";
        echo "Phone Number: $phoneNumber<br>";
        echo "Email: $email<br>";
        echo "Address: $address<br>";
        echo "City: $city<br>";
        echo "State: $state<br>";
        echo "Zip: $zip<br>";
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