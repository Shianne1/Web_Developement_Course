<?php include "utilFunctions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookStore - View Customers</title>
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
        $sql .= "FROM book b, publisher p, author a, book_author ba ";
        $sql .= "WHERE ba.author_id = a.author_id AND b.publisher_id = p.publisher_id";

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
            echo "  <tr>";
            echo "      <td>".$row['customer_id']."</td>";
            echo "      <td>".$row['firstName']."</td>";
            echo "      <td>".$row['lastName']."</td>";
            echo "      <td>".$row['email']."</td>";
            echo "      <td>".$row['phoneNumber']."</td>";
            echo "      <td>".$row['address']."</td>";
            echo "      <td>".$row['city']."</td>";
            echo "      <td>".$row['state']."</td>";
            echo "      <td>".$row['zip']."</td>";
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