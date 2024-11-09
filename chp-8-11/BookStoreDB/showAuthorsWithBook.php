<?php include "utilFunctions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookStore - View Author With Books</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href='styles.css'>
</head>
<body>
    <div class="w3-container w3-blue-grey">
        <header class="w3-container w3-center">
            <h1>Bookstore</h1>
            <h2>View Authors With Books</h2>
        </header>
        <?php include 'mainMenu.php' ?>

    <div class="w3-container w3-sand">
    <?php 
        include "connectDatabase.php";

        $sql = "SELECT a.author_id, a.firstName, a.lastName, COUNT(ba.bookAuthor_id) as totalbooks ";
        $sql .= "FROM author a ";
        $sql .= "JOIN book_author ba ON ba.author_id = a.author_id ";
        $sql .= "GROUP BY a.lastName";


        $result = $conn->query($sql);

        if($result->num_rows > 0){
            echo "<table class ='w3-table w3-striped'>";
            echo "  <tr class='w3-teal'>";
            echo "      <th>ID</th>";
            echo "      <th>First Name</th>";
            echo "      <th>Last Name</th>";
            echo "      <th>Total Books</th>";
            echo "  </tr>";

            while($row = $result->fetch_assoc()) {
            echo "  <tr>";
            echo "      <td>".$row['author_id']."</td>";
            echo "      <td>".$row['firstName']."</td>";
            echo "      <td>".$row['lastName']."</td>";
            echo "      <td>".$row['totalbooks']."</td>";
            echo "  </tr>";
            }

            echo "</table>";
        }
        else {
            echo "0 results<br>";
        }

        $conn->close();

    ?>
        </div>
    </div>
</body>
</html>