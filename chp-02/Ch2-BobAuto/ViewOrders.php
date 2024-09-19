
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bob's AutoParts - Customer Orders</title>
    <!-- W3 CSS-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
  </head>
  <body class="w3-sand">
    <div class = "w3-container w3-center">
      <h1>Bob's Auto Parts</h1>
      <h2>Customer Orders</h2>
    </div>

    <div class = "w3-container w3-light-gray">
        <?php 
        // open file for reading 
        @$fp = fopen("orders.txt", 'rb');

        if(!$fp) {
            echo "<br>No orders pending. Please try again later<br>";
            exit;
        }

        // lock file for reading
        flock($fp, LOCK_SH);

        // loop through all rows
        while(!feof($fp)) {
            $order = fgets($fp);
            echo htmlspecialchars($order)."<br>";
        }

        // unlock file 
        flock($fp, LOCK_UN);
        fclose($fp);
        
        ?>
    </div>

  </body>
</html>
