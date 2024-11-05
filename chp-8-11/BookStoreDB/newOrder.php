<?php include "utilFunctions.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore - New Order</title>
    <link rel='stylesheet' href='https://www.w3schools.com/w3css/4/w3.css'>
    <link rel="stylesheet" href='styles.css'>
</head>

<body>
    <div class="w3-container w3-blue-grey">
        <header class="w3-container w3-center">
            <h1>Bookstore</h1>
            <h2>New Order</h2>
        </header>

        <?php include 'mainMenu.php'?>
        <form action="newOrder.php" class="w3-container w3-sand" method = "POST">
            <fieldset>
                <label>Customer</label>
                <select class = "w3-select" name = "customer" id = "customer">
                    <option value"" disabled selected>Choose customer</option>
                    <?php 
                    include 'connectDatabase.php';

                    $sql = "SELECT * FROM customer ";

                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                        while($row = $result-> fetch_assoc()){
                            $customer_id = $row['customer_id'];
                            $lastName = $row['lastName'];
                            $firstName = $row['firstName'];
                            $address = $row['address'];
                            $city = $row['city'];
                            $state = $row['state'];
                            $zip = $row['zip'];

                            echo "<option value = '$customer_id>$customer_id";
                            echo "|$lastName, $firstname";
                            echo "|$address;$city;$state;$zip";
                            echo"</option>";
                        }
                    }
                    $conn->close();
                    ?>
                </select>

                <!-- Book selection -->
                 <label>Selected book(s)</label>
                 <input name = "booksSel" id="booksSel" value="None" type="hidden">
                 <select class="w3-select" name="listBooksSel" id="listBooksSel"></select>
                 
                 <input value="Remove book" class="w3-button w3-teal w3-round-large" onclick='removeBook()'><br>    <br>

                 <div class="container w3-khaki w3-padding w3-border-blue-grey w3-leftbar w3-topbar w3-bottombar w3-rightbar">
                    <h3>Book Selection</h3>
                    <label>Available Book(s)</label>
                    <select class="w3-select" id="listBooksAv">
                        <option value="" disabled selected>Choose book</option>
                        <?php 
                            include "connectDatabase.php";

                            $sql = "SELECT * FROM book";

                            $result = $conn->query($sql);

                            if($result->num_rows > 0){
                                while($row = result->fetech_assoc()){
                                    $bookId = $row['book_id'];
                                    $title = $row['title'];
                                    $isbn = $row['ISBN'];
                                    $price = $row['price'];

                                    echo "<option value='$bookId' id='book-$bookId'>$bookId|$title|$isbn|$price</option>";                          
                                }
                            }
                            $conn->close();
                        ?>
                    </seleect>
                    <label>Quantity</label>
                    <input class="w3-input w3-border" type="number" id="quantity" maxlength="30" size="30"/>

                    <input class="w3-button w3-teal w3-round-large" value="Add book" onclick="addBook()">  <br>
                 </div>

                 <!-- End Book Selection -->

                 <label>Order Date</label>
                <input class="w3-input w3-border" type="date" name="orderDate" maxlength="30" size="30"/>
                
                <label>Ship Date</label>
                <input class="w3-input w3-border" type="number" name="shipDate" maxlength="30" size="30"/>

                <label>Shipping Street</label>
                <input class="w3-input w3-border" type="number" id="quantity" maxlength="30" size="30"/>
                
                <label>Quantity</label>
                <input class="w3-input w3-border" type="number" id="quantity" maxlength="30" size="30"/>

                <label>Quantity</label>
                <input class="w3-input w3-border" type="number" id="quantity" maxlength="30" size="30"/>
                
                <label>Quantity</label>
                <input class="w3-input w3-border" type="number" id="quantity" maxlength="30" size="30"/>

                <label>Quantity</label>
                <input class="w3-input w3-border" type="number" id="quantity" maxlength="30" size="30"/>
                
                <label>Quantity</label>
                <input class="w3-input w3-border" type="number" id="quantity" maxlength="30" size="30"/>

                <label>Quantity</label>
                <input class="w3-input w3-border" type="number" id="quantity" maxlength="30" size="30"/>
                
                <label>Quantity</label>
                <input class="w3-input w3-border" type="number" id="quantity" maxlength="30" size="30"/>

            </fieldset>
        </form>
    </div>
    
</body>
</html>