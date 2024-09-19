<?php 
// create short name variable names
$tireqty = (int)$_POST['tireqty'];
$oilqty = (int)$_POST['oilqty'];
$sparkqty = (int)$_POST['sparkqty'];
$address = preg_replace('/\t|\R/', ' ', $_POST['address']);
$tireqty = (int)$_POST['tireqty'];
//$document_root = $_Server('DOCUMENT_ROOT');    causes errors.
$date = date('H:i, jS F Y');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bob's Auto Parts - Process Order</title>
    <!-- W3 CSS-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
  </head>
  <body class="w3-sand">
    <div class = "w3-container w3-center" >
      <h1>Bob's Auto Parts</h1>
      <h2>Order Results</h2>
    </div>

    <div class = "w3-container w3-light-gray">
        <?php 
        echo "Order processed at $date<br>";
        echo "Your order is as follows:<br>";

        $totalqty = 0;
        $totalamount = 0.0;

        // contast variables are always upper case
        define('TIRE_PRICE', 100);
        define('OIL_PRICE', 10);
        define('SPARK_PRICE', 4);

        $totalqty = $tireqty + $oilqty + $sparkqty;
        echo "<br>Items ordered: $totalqty<br>";

        if($totalqty == 0){
            echo "You did not order anything on the previous page!<br>";
        } else {

            // tires visible price
            if($tireqty > 0){
                echo htmlspecialchars($tireqty)." tires<br>";
            }

            // oils visible price
            if($oilqty > 0){
                echo htmlspecialchars($oilqty)." bottles of oil<br>";
            }

            // spark plugs visble price
            if($sparkqty > 0){
                echo htmlspecialchars($sparkqty)." spark plugs<br>";
            }
        }
        $totalamount = ($tireqty * TIRE_PRICE) + ($oilqty * OIL_PRICE) + ($sparkqty *SPARK_PRICE);

        echo "Subtotal: $".number_format($totalamount, 2)."<br>"; 

        echo "<br>Address to ship to is ".htmlspecialchars($address)."<br>";
    
        // will make a new file
        $outputStr = $date."\t".$tireqty." tires\t".$oilqty." oil \t".$sparkqty." spark plugs \t\$".$totalamount."\t".$address."\n";

        // open fle for appending
        // when looking at the videos, do not create a new folder, just submit in the current folder.
        @$fp = fopen("orders.txt", 'ab'); // if the isn't a file make it. If there append the new imformation to the end.
        // @ symbol is error surpression meaning there won't be any errors.

        if(!$fp) {
            echo "<br>Your order cannot be processed at this time. Please try again later<br>";
            exit;
        }

        //lock the file before writing
        flock($fp, LOCK_EX);

        // wirte to file 
        fwrite($fp, $outputStr, strlen($outputStr));

        // unlock the file 
        flock($fp, LOCK_UN);

        // close file
        fclose($fp);

        echo "<br>Order written<br>";
        ?>
    </div>

  </body>
</html>
