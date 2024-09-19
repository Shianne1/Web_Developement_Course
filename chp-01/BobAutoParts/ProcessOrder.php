<?php
# create short variable names
$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];
$sourceIndex = $_POST['find'];
$sourceArray = ['Regular customer', 'TV advertising', 'Phone directory', 'Word of mouth', 'Social Media', 'Search Engine'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Results</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class ="w3-sand">
    <div class = "w3-container w3-center">
        <h1>Bob's Auto Parts</h1>
        <h2>Order Results</h2>
    </div>
    <div class = "w3-container w3-pale-green">
        <?php
        // display input
        $tireqty = htmlspecialchars($tireqty); // will strip off any excess characters to prevent hacking
        $tireqty = (int)$tireqty;

        $oilqty = htmlspecialchars($oilqty); // will strip off any excess characters to prevent hacking
        $oilqty = (int)$oilqty;

        $sparkqty = htmlspecialchars($sparkqty); // will strip off any excess characters to prevent hacking
        $sparkqty = (int)$sparkqty;

        $sourceIndex = (int)$sourceIndex;

        echo "<br>Order proccessed at ";
        echo date('H:i, jS F Y')."<br>";
        echo "Your order is as follows:<br>";
        echo "Number of tires: $tireqty<br>";
        echo "Number of oil bottles: $oilqty<br>";
        echo "Number of spark plugs: $sparkqty<br>";

        echo "Referral Source: ".$sourceArray[$sourceIndex]."<br>";

        $totalqty = $tireqty + $oilqty + $sparkqty;
        echo "Items ordered: $totalqty<br>";

        //define constant
        define('TIRE_PRICE', 100);
        define('OIL_PRICE', 10);
        define('SPARK_PRICE', 4);

        $totalAmount = $tireqty * TIRE_PRICE + $oilqty * OIL_PRICE + $sparkqty * SPARK_PRICE;
        echo "Subtotal: $".number_format($totalAmount, 2)."<br>";

        $taxRate = .1; //local sales tax is 10%
        $totalAmount *= (1.0 + $taxRate);
        echo "Total including tax: $".number_format($totalAmount, 2)."<br>";
        ?>
    </div>
    
</body>
</html>