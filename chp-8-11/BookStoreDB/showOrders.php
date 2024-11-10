<?php include "utilFunctions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookStore - View All Orders</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href='styles.css'>
</head>
<body>
    <div class="w3-container w3-blue-grey">
        <header class="w3-container w3-center">
            <h1>Bookstore</h1>
            <h2>View All Orders</h2>
        </header>
        <?php include 'mainMenu.php' ?>

    <div class="w3-container w3-sand">
    <?php 
        include "connectDatabase.php";

        $sql = "SELECT o.order_id, o.orderDate, c.lastName, c.firstName, b.title, bo.quantity, b.price, (bo.quantity * b.price) AS total, o.shipCost ";
        $sql .= "FROM orders o ";
        $sql .= "JOIN customer c ON o.customer_id = c.customer_id 
                    JOIN book_order bo ON o.order_id = bo.order_id
                    JOIN book b ON bo.book_id = b.book_id";

        $result = $conn->query($sql);

        if($result->num_rows > 0){
            echo "<table class ='w3-table w3-striped'>";
            echo "  <tr class='w3-teal'>";
            echo "      <th>ID</th>";
            echo "      <th>Date</th>";
            echo "      <th>LastName</th>";
            echo "      <th>First Name</th>";
            echo "      <th>Book Title</th>";
            echo "      <th>Qty</th>";
            echo "      <th>$/Unit</th>";
            echo "      <th>Shipping Cost</th>";
            echo "  </tr>";

            while($row = $result->fetch_assoc()) {
            echo "  <tr>";
            echo "      <td>".$row['order_id']."</td>";
            echo "      <td>".$row['orderDate']."</td>";
            echo "      <td>".$row['lastName']."</td>";
            echo "      <td>".$row['firstName']."</td>";
            echo "      <td>".$row['title']."</td>";
            echo "      <td>".$row['quantity']."</td>";
            echo "      <td>".$row['total']."</td>";
            echo "      <td>".$row['shipCost']."</td>";
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