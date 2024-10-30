<?php include "utilFunctions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookeStore - Delete Customer</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="w3-container w3-blue-grey">
        <header class="w3-container w3-center">
            <h1>Bookstore</h1>
            <h2>Delete Customer</h2>
        </header>
        <?php include 'mainMenu.php' ?>

        <form action="deleteCustomer.php" class="w3-container w3-sand" method="POST">
            <fieldset>
                <label>Customer</label>
                <select name="customer" class = "w3-select">
                    <option value = "" disabled slected>Choose customer</option>
                    <?php include "connectDatabase.php";
                    
                    //select customers who do not have orders
                    $sql = "SELECT c.customer_id, c.firstName, c.lastName ";
                    $sql .= "FROM customer c LEFT JOIN orders o";
                    $sql .= "on c.customer_id = o.customer_id";
                    $sql .= "WHERE o.order_id IS NULL ";

                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            $customerId = $row['customer_id'];
                            $customerFirstName = $row['firstName'];
                            $customerLastName = $row['lastName'];

                            echo "option value = '$customerId'>$customerId-$customerLastName, $customerFirstName</option>";                        
                        }
                        $conn->close();
                    }
                    ?>

                </select><br>
                <b>NOTE</b>: only customerswith not orders can be deleted           
</fieldset>
<br><input type="submit" name="submit" class="w3-btn w3-blue-grey" value = "Delete customer"><br>
        </form>

        <!-- WORK NOT DONE -->

<div class="w3-container">
    <?php 
        if(isset($_POST['submit'])){
            if(!isset($_POST['customer'])){
                echo "<p>You have not entered all the required details.<br/>Please go back and try again.</p>";
                exit;
            }

            $customer_id = $_POST['customer'];

        include "connectDatabase.php";

        $sql = "DELETE";
        $sql .= "FROM customer";
        $sql .= "WHERE customer_id = '$customer_id'";

        if($conn->query($sql) === TRUE){
            echo "Customer record for customer_id = $customer_id successfully deleted!<br>";
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