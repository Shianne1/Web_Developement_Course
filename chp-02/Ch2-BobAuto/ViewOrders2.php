<?php 
  $document_root = $_SERVER['DOCUMENT_ROOT'];
// shorthand for htmlspecialchars
function hsc($text) {
    return htmlspecialchars($text);
}

//convert array to table row
function toTableRow($myArray) {
    // retrieve the number of elements of $myArray
    $n = is_countable($myArray)? count ($myArray): 0;

    //begin row 
    $result = "<tr>";

    // loop through all rows
    //while(!feof($fp))
    //    $order = fgetcsv
    
    // loop through all elements
    /**
    foreach($myArray as $element) {
        $result .= "<td>".hsc($element)."</td>";
    }
    */

    for($i = 0; $i < $n; $i++){
      $result .= "<td>".hsc($myArray[$i])."</td>";
    }

    // end row
    $result .= "</tr>";

    return $result;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Process Order</title>
    <!-- W3 CSS-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
  </head>
  <body class="w3-sand">
    <div>
      <h1>Bob's Auto Parts</h1>
      <h2>Customer Orders</h2>
    </div>

    <div>
        <?php 
        // open file for reading 
        @$fp = fopen("orders.txt", 'rb');

        if(!$fp) {
            echo "<br>No orders pending. Please try again later<br>";
            exit;
        }

        // lock filefor reading
        flock($fp, LOCK_SH);

        //diplays a table
        echo "<table class='w3-table w3-table-all'>";
        echo "<tr class ='w3-blue-gray'>";
        echo "      <th>Date</th>";
        echo "      <th>Num tires</th>";
        echo "      <th>Num oil</th>";
        echo "      <th>Num spark</th>";
        echo "      <th>Total</th>";
        echo "      <th>Address</th>";
        echo "</tr>";

        // loop through all rows
        while(!feof($fp)) {
            $order = fgetcsv($fp, 0, "\t");
            echo toTableRow($order);
        }

        echo "</table>";

        echo "<hr/>";
        echo "Final position of the file pointer is ".(ftell($fp));
        echo "<br>";
        rewind($fp);
        echo "After rewind, the postion of the file pointer is ".(ftell($fp));

        // unlock file 
        flock($fp, LOCK_UN);
        fclose($fp);
        
        ?>
    </div>

  </body>
</html>
