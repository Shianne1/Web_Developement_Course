<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Reservations</title>
    <!-- W3 CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <style>
        h1,h2{
            text-shadow: 1px 1px 0 #444;
            font-family: Verdana;
        }
    </style>
</head>
<body>
    <div class="w3-container w3-sand">
        <header class="w3-display-conatiner w3-green" style = "height:130px">
            <div class = "w3-display-topright">
                <img src = "planeSmall.png">
            </div>
            <div class = "w3-display-topmiddle" style = "text-align:center">
                <h1>Dream Vacations</h1>
                <h2>View Reservations</h2>
            </div>
        </header>
        <nav class="w3-bar w3-border w3-light-grey">
            <a  class = "w3-bar-item w3-button" href="DreamVacations-bookTrips.php">Booking</a>
            <a  class = "w3-bar-item w3-button" href="DreamVacations-showReservations.php">Show Resevations</a>
        </nav>

        <div class="w3-container">
            <?php 
            $myfile = fopen('bookings.csv', 'r') or die("Unable to open file!"); // die will kill the code to open the file.

            $outTable = "<table class = 'w3-table w3-striped w3-border'>";
            $outTable .= "<tr class = 'w3-teal'>";
            $outTable .= "<th>Date</th>";
            $outTable .= "<th>First Name</th>";
            $outTable .= "<th>Last Name</th>";
            $outTable .= "<th>City</th>";
            $outTable .= "<th>Num Passengers</th>";
            $outTable .= "<th>Depart</th>";
            $outTable .= "<th>Return</th>";
            $outTable .= "</tr>";

            while(!feof($myfile)){
                // read file
                $curlineArray = fgetcsv($myfile, 0, ',');

                if(is_array($curlineArray)){
                    // append row to the table
                $outTable .= "<tr>";

                // popultate current line as a new table row
                foreach($curlineArray as $curline){
                    $outTable .= "<td>$curline</td>";
                }

                // close current row
                $outTable .= "</tr>";
            }
            }
            $outTable .= "</table>"; // .= is a concation meaning it adds the strings together

            fclose($myfile);
            echo $outTable;
            ?>
        </div>
    </div>
    
</body>
</html>