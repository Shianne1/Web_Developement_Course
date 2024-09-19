<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking </title>
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
                <h2>Trip Booking</h2>
            </div>
        </header>
        <nav class="w3-bar w3-border w3-light-grey">
            <a  class = "w3-bar-item w3-button" href="DreamVacations-bookTrips.php">Booking</a>
            <a  class = "w3-bar-item w3-button" href="DreamVacations-showReservations.php">Show Resevations</a>
        </nav>
        <form class="w3-container" method = "POSt">
            <label>First Name</label>
            <input type="text" class="w3-input" name="fName">

            <label>Last Name</label>
            <input type="text" class="w3-input" name="lName">

            <label>Destination</label>
            <select class="w3-select" name="destination">
                <option value = "PEK">Beijing-PEK</option>
                <option value = "CAI">Cairo-CAI</option>
                <option value = "JFK">NewYork-JFK</option>
                <option value = "CDG">Paris-CDG</option>
                <option value = "NRT">Tokyo-NRT</option>
                <option value = "GIG">Rio de Janeiro-GIG</option>
                <option value = "ATL">Atlanta-ATL</option>
            </select>

            <label>Number of passengers</label>
            <select name="numberOfPassengers" class="w3-select">
                <option value = "1">1</option>
                <option value = "2">2</option>
                <option value = "3">3</option>
                <option value = "4">4</option>
            </select>

            <label>Date from</label>
            <input type="date" class="w3-input" name = "dateFrom">

            <label>Date to</label>
            <input type="date" class="w3-input" name = "dateTo">

            <input type="submit" value = "submit" name = "submit" class="w3-btn w3-green">

        </form> <!-- if we don't specify an action, then the action is the current page -->

        <div class="w3-container">
            <?php 
            if(isset($_POST['submit'])){
                echo "<br>Form submitted!<br>";

                if(empty($_POST['fName']) || empty($_POST['lName']) || empty($_POST['numberOfPassengers']) || empty($_POST['dateFrom']) || empty($_POST['dateTo'])){
                    echo "Not all fields have values. ";
                    echo "Please complete the form and try again.<br>";
                    exit;
                }
        
            //associatvie array
            $allDestinations = array("PEK" =>"Beijing", "CAI" => "Cario",
            "JFK" => "New York",
            "CDG" => "Paris",
            "NRT" => "Tokyo",
            "GIG" => "Rio de Janeiro",
            "ATL" => "Atlanta");

            $fName = $_POST['fName'];
            $lName = $_POST['lName'];
            $destination = $_POST['destination'];
            $numPassengers = $_POST['numberOfPassengers'];
            $dateFrom = $_POST['dateFrom'];
            $dateTo = $_POST['dateTo'];

            echo "<h3>Booking Sucessful!</h3>";
            echo "<b>First Name: </b>$fName<br>";
            echo "<b>Last Name: </b>$lName<br>";
            echo "<b>Destination: </b>$destination<br>";
            echo "<b>Number of passengers: </b>$numPassengers<br>";
            echo "<b>Date from: </b>$dateFrom<br>";
            echo "<b>Date to: </b>$dateTo<br>";

            // MISSING WORK
            //$out

            //write to file
            $outputStr = date("Y-m-d H:i:s").","; // booking date
            $outputStr .= $fName.",";
            $outputStr .= $lName.",";
            $outputStr .= $destination.",";
            $outputStr .= $numPassengers.",";
            $outputStr .= $dateFrom.",";
            $outputStr .= $dateTo.PHP_EOL;

            $fileName = "bookings.csv";
            @$fp = fopen($fileName, 'a');

            if(!$fp){
                echo "Your order could not be processed at this time. Try again later.<br>";
                exit;
            }

            // lock file for writing
            flock($fp, LOCK_EX);

            // write to file
            fwrite($fp, $outputStr, strlen($outputStr));

            //unlock file
            flock($fp, LOCK_UN);

            //close the file
            fclose($fp);
        }
            ?>
        </div>
    </div>
    
</body>
</html>