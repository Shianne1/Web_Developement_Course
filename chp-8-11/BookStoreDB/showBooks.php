<?php include "utilFunctions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookStore - View Books</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href='styles.css'>
</head>
<body>
    <div class="w3-container w3-blue-grey">
        <header class="w3-container w3-center">
            <h1>Bookstore</h1>
            <h2>View All Books</h2>
        </header>
        <?php include 'mainMenu.php' ?>

    <div class="w3-container w3-sand">
    <?php 
        include "connectDatabase.php";

        $sql = "SELECT b.book_id, b.title, a.firstName, a.lastName, b.price, p.name ";
        $sql .= "FROM book b ";
        $sql .= "JOIN publisher p ON b.publisher_id = p.publisher_id 
                    JOIN book_author ba ON b.book_id = ba.book_id
                    JOIN author a ON ba.author_id = a.author_id ";

        $result = $conn->query($sql);

        if($result->num_rows > 0){
            echo "<table class ='w3-table w3-striped'>";
            echo "  <tr class='w3-teal'>";
            echo "      <th>ID</th>";
            echo "      <th>Title</th>";
            echo "      <th>Author</th>";
            echo "      <th>Price</th>";
            echo "      <th>Publisher</th>";
            echo "  </tr>";

            while($row = $result->fetch_assoc()) {
            $authorName = $row['firstName'] . " " . $row['lastName'];
            echo "  <tr>";
            echo "      <td>".$row['book_id']."</td>";
            echo "      <td>".$row['title']."</td>";
            echo "      <td>".$authorName."</td>";
            echo "      <td>".$row['price']."</td>";
            echo "      <td>".$row['name']."</td>";
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