<?php 
$productsArray = [
    0 => ['Apple Pie', 12.5], 
    1 => ['Cheesecake', 5.5],
    2 => ['Croissant', 2.5],
    3 => ['Doughnut', 0.5],
    4 => ['Pastel de Nata', 4]
];
    
    
// create short variables names for the input recevied.
$productIndex = (int)$_POST['product'];
$productSelected = $productsArray[$productIndex];
$productName = $productSelected[0];
$productPrice = $productSelected[1];
$quantity = (int)$_POST['quantity'];
$document_root = $_SERVER['DOCUMENT_ROOT'];
$date = date('d/m/Y h:i:s');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clementine Bakery Order results</title>
    <link rel = "stylesheet" href = "https://www.w3schools.com/w3css/4/w3.css">
    <!-- Gooogle fonts -->
     <link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Pacifico"> <!-- a GET request -->
     <style>
        .w3-pacifico {font-family: "Pacifico", serif;} 
        h1{font-family: "Pacifico", serif;}     
        </style>
</head>
<body class = "w3-pale-red">
    <div class="w3-container w3-center w3-pink">
        <h1>Clementine Bakery</h1>
        <h2>Order Results</h2>
        <img src="ChocolateCake.png" width = "10%" class="w3-display-topleft">
        <img src="Croissant_PNG_Clip_Art-2216.png" width = "10%" height = "10%" class="w3-display-topright">
    </div>
    <?phP include "menu.php"; ?>

    <div class="w3-container w3-light-gray">
        <?php 
        if($quantity <= 0){
            echo "You did not order anythign on the previous page!<br>";
            //echo "Please go back and try again <br>"
            exit;
        }
        
        echo "Order processed at $date<br>";
        echo "Your order is as follows: <br>";

        echo "Item ordered: $productName<br>";
        echo "Quantity: $quantity<br>";
        echo "Unit price: $productPrice<br>";

        $totalAmount = $quantity * $productPrice;
        echo "Total: $".number_format($totalAmount, 2)."<br>";
           
        $outputstring = "$date;$productName;$quantity;$totalAmount\n";

        // open file for appending
        @$fp = fopen("orders.txt", "ab");
               if(!$fp){
                echo "Your order cannot be proccessed at this time. Please try again later...<br>";
                exit;
               }

               //lock file for appending
               flock($fp, LOCK_EX);

               // write to file 
               fwrite($fp, $outputstring, strlen($outputstring));

               //unlock file 
               flock($fp, LOCK_UN);
               
               //close file
               fclose($fp);

               echo "Order written!<br>";
               
        ?>
    </div>
</body>
</html>