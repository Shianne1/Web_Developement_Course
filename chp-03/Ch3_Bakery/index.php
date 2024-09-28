<?php 
$productsArray = [
    0 => ['Apple Pie', 12.5], 
    1 => ['Cheesecake', 5.50],
    2 => ['Croissant', 2.5],
    3 => ['Doughnut', 0.5],
    4 => ['Pastel de Nata', 4]];

    $GLOBALS['productsArray'] = $productsArray;
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clementine Bakery-Home</title>
    <link rel = "stylesheet" href = "https://www.w3schools.com/w3css/4/w3.css">
    <!-- Gooogle fonts -->
     <link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Pacifico"> <!-- a GET request -->
     <style>
        .w3=pacifico {font-family: "Pacifico", serif;} 
        h1{font-family: "Pacifico", serif}     
    </style>
</head>
<body class = "w3-pale-red">
    <div class="w3-container w3-center w3-pink">
        <h1>Clementine Bakery</h1>
        <h2>Order Form</h2>
        <img src="ChocolateCake.png" width = "10%" class="w3-display-topleft">
        <img src="Croissant_PNG_Clip_Art-2216.png" width = "10%" height = "10%" class="w3-display-topright">
    </div>
    <?phP include "menu.php"; ?>
    <form action = "ProcessOrder.php" mthod = "POST">
        <label>Select Product</label>
        <select name = "product" class = "w3-select">
            <?php 
            // loop through the $product Array
            foreach($productsArray as $key =>$value)
            echo "<option value = '$key'> $value[0] </option><br>";
        ?>
        </select>

        <label>Enter quantity</label>
        <input type="text" class="w3-input" name = "quantity" size = "4" maxlength = "4">

        <input type = "submit" name = "submit" value = "Submit Order">

    </form>
    <div class="w3-container">
        <table class="w3-table w3-table-all">
            <tr class="w3-blue-gray">
                <th>Item code</th>
                <th>Description</th>
                <th>Unit Price</th>
            </tr>
            <?php 
                foreach($productsArray as $key =>$value){
                echo "<tr>";
                echo "<td>$key</td>";
                echo "<td>$value[0]</td>";
                echo "<td> $".number_format($value[1], 2). "</td>";
                echo "</tr>";
                }
            ?>
        </table>
    </div>   
</body>
</html>