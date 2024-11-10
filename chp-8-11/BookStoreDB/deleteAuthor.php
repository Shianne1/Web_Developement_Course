<?php include "utilFunctions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookeStore - Delete Author</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href='styles.css'>
</head>
<body>
    <div class="w3-container w3-blue-grey">
        <header class="w3-container w3-center">
            <h1>Bookstore</h1>
            <h2>Delete Author</h2>
        </header>
        <?php include 'mainMenu.php' ?>

        <form action="deleteAuthor.php" class="w3-container w3-sand" method="POST">
            <fieldset>
                <label>Author</label>
                <select name="author" class = "w3-select">
                    <option value = "" disabled selected>Choose Author</option>
                    <?php 
                    include "connectDatabase.php";

                    // need to have a space between them because they are being concated together for the query
                    $sql = "SELECT *";
                    $sql .= "FROM author a ";

                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            $authorId = $row['author_id'];
                            $authorFirstName = $row['firstName'];
                            $authorLastName = $row['lastName'];

                            echo "<option value = '$authorId'>$authorLastName-$authorFirstName</option>";                        
                        }
                        $conn->close();
                    }
                    ?>

                </select><br>          
</fieldset>
<p><input type="submit" name="submit" class="w3-btn w3-blue-grey" value = "Delete author"></p>
        </form>

<div class="w3-container">
    <?php 
        if(isset($_POST['submit'])){
            if(!isset($_POST['author'])){
                echo "<p>You have not entered all the required details.<br/>Please go back and try again.</p>";
                exit;
            }

            $author_id = $_POST['author'];
            $sqlBA = "DELETE ";
            $sqlBA .= "FROM book_author ";
            $sqlBA .= "WHERE author_id = '$author_id'";

        include "connectDatabase.php";

        if($conn->query($sqlBA) === TRUE){
            echo "Book_author record(s) for author_id = $author_id successfully deleted!<br>";
        } else {
            echo "Error: " .$sqlBA . "<br>" .$conn->error;
        }

        $sql = "DELETE ";
        $sql .= "FROM book_author ";
        $sql .= "WHERE author_id = '$author_id'";

        if($conn->query($sql) === TRUE){
            echo "Author for author_id = $author_id successfully deleted!<br>";
        } else {
            echo "Error: " .$sql . "<br>" .$conn->error;
        }

        $conn->close();
        }

    ?>
</div>
    </div>
</body>
</html>