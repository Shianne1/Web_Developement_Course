<?php include "utilFunctions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore - New Book Entry</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href='styles.css'>
</head>
<body>
    <div class="w3-container w3-blue-grey">
        <header class="w3-container w3-center">
            <h1>Bookstore</h1>
            <h2>New Book</h2>
        </header>
        <?php include 'mainMenu.php' ?>

        <form action="newBook.php" class="w3-container w3-sand"
        method="POST">
        <fieldset>
            <label>Title</label>
            <input type="text" class="w3-input w3-border" name="title" maxlength="200" size="200">

            <label>ISBN</label>
            <input type="text" class="w3-input w3-border" name="isbn" maxlength="200" size="200">

            <label>Price</label>
            <input type="text" class="w3-input w3-border" name="price" maxlength="200" size="200">

            <label>Publication Date</label>
            <input type="text" class="w3-input w3-border" name="publication" maxlength="200" size="200">

            <label>Publisher</label>
                <select name="publisher" class = "w3-select">
                    <option value = "" disabled selected>Choose publisher</option>
                    <?php 
                    include "connectDatabase.php";
                    
                    //select customers who do not have orders

                    // need to have a space between them because they are being concated together for the query
                    $sql = "SELECT publisher_id, name, email, phoneNumber ";
                    $sql .= "FROM publisher ";
                 

                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            $publisherId = $row['publisher_id'];
                            $publisherName = $row['name'];
                            $publisherEmail = $row['email'];

                            echo "<option value = '$publisherId'>$publisherId-$publisherName</option>";                        
                        }
                        $conn->close();
                    }
                    ?>

                </select><br>

                <label>Book Author(s)</label>
                <select name="publisher" class = "w3-select">
                    <option value = "" disabled selected></option>
                    <?php 
                    include "connectDatabase.php";
                    
                    //select customers who do not have orders

                    // need to have a space between them because they are being concated together for the query
                    $sql = "SELECT publisher_id, name, email, phoneNumber ";
                    $sql .= "FROM publisher ";
                 

                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            $publisherId = $row['publisher_id'];
                            $publisherName = $row['name'];
                            $publisherEmail = $row['email'];

                            echo "<option value = '$publisherId'>$publisherId-$publisherName</option>";                        
                        }
                        $conn->close();
                    }
                    ?>

                </select><br>


                <label>Available Author(s)</label>
                <select name="author" class = "w3-select">
                    <option value = "" disabled selected>Choose author</option>
                    <?php 
                    include "connectDatabase.php";
                    
                    //select customers who do not have orders

                    // need to have a space between them because they are being concated together for the query
                    $sql = "SELECT * ";
                    $sql .= "FROM author ";
                 

                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            $authorId = $row['author_id'];
                            $authorLastName = $row['lastName'];
                            $authorFirstName = $row['firstName'];

                            echo "<option value = '$authorId'>$authorId-$authorLastName, $authorFirstName</option>";                        
                        }
                        $conn->close();
                    }
                    ?>

                </select><br>

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
        !isset($_POST['zip']) 
        ) {
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