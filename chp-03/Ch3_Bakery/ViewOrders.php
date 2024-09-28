<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clementine Bakery-View Orders</title>
    <link rel = "stylesheet" href = "https://www.w3schools.com/w3css/4/w3.css">
    <!-- Gooogle fonts -->
     <link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Pacifico"> <!-- a GET request -->
     <style>
        .w3=pacifico {font-family: "Pacifico", serif;} 
        h1{font-family: "Pacifico", serif}     </style>
</head>
<body class = "w3-pale-red">
    <div class="w3-container w3-center w3-pink">
        <h1>Clementine Bakery</h1>
        <h2>View Orders</h2>
        <img src="ChocolateCake.png" width = "10%" class="w3-display-topleft">
        <img src="Croissant_PNG_Clip_Art-2216.png" width = "10%" height = "10%" class="w3-display-topright">
    </div>
    <?php include "menu.php"; ?>
    <?php 
    $orders = file("orders.txt");

    $number_of_orders = count($orders);
    if($number_of_orders == 0){
        echo "No orders pending. Please try again later<br>"; 
        exit;
    } 

    //display results
    echo "<table class='w3-table w3-striped w3-border'>";
    echo "  <tr class = 'w3-blue-gray'>";
    echo "      <th>DateTime</th>";
    echo "      <th>Product</th>";
    echo "      <th>Quantity</th>";
    echo "      <th>Total</th>";
    echo "  </tr>";

    // loop through each row
    for($i=0; $i<$number_of_orders; $i++){
        // retrieve current row (current order) from the array
        $curOrder = explode(";", $orders[$i]);

        // begin table row
        echo "<tr>";

        for($j = 0; $j < count($curOrder); $j++){
            echo "<td>".$curOrder[$j]."</td>";
        }
        
        // end table row
        echo "</tr>";
    }
    echo "</table>";
    ?>
    
</body>
</html>