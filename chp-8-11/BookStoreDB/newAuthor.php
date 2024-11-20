<?php include "utilFunctions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore - New Author Entry</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href='styles.css'>
</head>
<body>
    <div class="w3-container w3-blue-grey">
        <header class="w3-container w3-center">
            <h1>Bookstore</h1>
            <h2>New Author</h2>
        </header>
        <?php include 'mainMenu.php' ?>

        <form action="newAuthor.php" class="w3-container w3-sand"
        method="POST">
        <fieldset>
            <label>First Name</label>
            <input type="text" class="w3-input w3-border" name="fName" maxlength="200" size="200"/>

            <label>Last Name</label>
            <input type="text" class="w3-input w3-border" name="lName" maxlength="200" size="200"/>

        </fieldset>

       <p><input type="submit" class="w3-btn w3-blue-grey" name = "submit" value="Add New Author"/></p>
</form>
<div class="w3-container w3-sand">
    <?php 
    if(isset($_POST['submit'])){
        if(!isset($_POST['fName']) || !isset($_POST['lName'])) {
            echo "<p>You have not entered all the required details.<br/>
            Please go back and try again.</p>";
            exit;
        }
    

    include "connectDatabase.php";

    # create short variable names
    $fName = mysqli_real_escape_string($conn, $_POST['fName']);
    $lName = mysqli_real_escape_string($conn, $_POST['lName']);

    $sql = "INSERT INTO author (firstName, lastName)
    VALUES ('$fName', '$lName')";
    

    if($conn->query($sql) === TRUE){
        $author_id = $conn->insert_id;
        echo "<strong>Author created sucessfully!</strong><br>";
        echo "Author id: $author_id<br>";
        echo "First name: $fName<br>";
        echo "Last name: $lName<br>";
    }
    else{
        echo "Error: Unable to create new Author. ".$conn->error."<br>";
        echo $sql;
    }

    $conn->close();
    }

    ?>
        </div>
    </div>
</body>
</html>