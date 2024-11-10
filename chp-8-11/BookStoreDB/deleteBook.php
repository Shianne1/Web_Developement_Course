<?php include "utilFunctions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookeStore - Delete Book</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href='styles.css'>
</head>
<body>
    <div class="w3-container w3-blue-grey">
        <header class="w3-container w3-center">
            <h1>Bookstore</h1>
            <h2>Delete Book</h2>
        </header>
        <?php include 'mainMenu.php' ?>

        <form action="deleteBook.php" class="w3-container w3-sand" method="POST">
            <fieldset>
                <label>Book</label>
                <select name="book" class = "w3-select">
                    <option value = "" disabled selected>Choose Book</option>
                    <?php 
                    include "connectDatabase.php";

                    // need to have a space between them because they are being concated together for the query
                    $sql = "SELECT book_id, title ";
                    $sql .= "FROM book ";

                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            $bookId = $row['book_id'];
                            $title = $row['title'];

                            echo "<option value = '$bookId'>$bookId-$title</option>";                        
                        }
                        $conn->close();
                    }
                    ?>

                </select><br>          
</fieldset>
<p><input type="submit" name="submit" class="w3-btn w3-blue-grey" value = "Delete Book"></p>
        </form>

        <!-- WORK NOT DONE -->

<div class="w3-container">
    <?php 
        if(isset($_POST['submit'])){
            if(!isset($_POST['book'])){
                echo "<p>You have not entered all the required details.<br/>Please go back and try again.</p>";
                exit;
            }

            $book_id = $_POST['book'];
            $sqlBA = "DELETE ";
            $sqlBA .= "FROM book_author ";
            $sqlBA .= "WHERE book_id = '$book_id'";

        include "connectDatabase.php";

        if($conn->query($sqlBA) === TRUE){
            echo "Book_author record(s) for book_id = $book_id successfully deleted!<br>";
        } else {
            echo "Error: " .$sqlBA . "<br>" .$conn->error;
        }

        $sql = "DELETE ";
        $sql .= "FROM book_author ";
        $sql .= "WHERE book_id = '$book_id'";

        if($conn->query($sql) === TRUE){
            echo "Book for book_id = $book_id successfully deleted!<br>";
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