<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wheather API</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-indigo.css"> 
</head>
<body class="w3-theme-l5">
    <header class="w3-display-container w3-center w3-thme-l3">
        <h1>Weather Info<h1>
    </header>

    <form action="WeatherAPI.php" class="w3-container w3-theme-l3" method="POST">
        <label>City</label>
        <select name="selectedCity" class="w3-select">
            <option value="" disabled selected>Choose Ciy</option>
            <?php 
            include "connectDatabase.php";

            //retrieve cities
            $sql = "SELECT ct.name as countryName, cy.name as cityname, cy.city_id";
            $sql .= "FROM country ct, city cy";
            $sql .= "WHERE ct.country_id = cy.country_id";
            $sql .= "ORDER BY countryName, cityName";

            $result = $conn->query($sql);

            if($result->num_row > 0){
                while($row = $result->fetch_assoc()){
                    $cityId = $row['city_id'];
                    $country = $row['countryName'];
                    $city = $row['cityName'];

                    echo "<option value='$city'>$city, $country</option>";;
                }
            }
            $conn->close();
            ?>
        </select>
        <br><input type="submit" name="submit" class="w3-btn w3-blue-grey" value="Get weather">
    </form>
    <div class="w3-container w3-themel4">
        <?php 
        if(isset($_POST['submit'])){
            if(!isset($_POST['selectedCity'])){
                echo "Please select a city<br>";
                exit;
            }

            $selectedCity = $_POST['selectedCity'];

            

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://weatherapi-com.p.rapidapi.com/current.json?q=.$selectedCity",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: weatherapi-com.p.rapidapi.com",
		"x-rapidapi-key: 0576dcb465msh443527aaf349783p182dc4jsn73089664fac7"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $data;

    $jsonData = $data; // store the original string data 
    $data = json_decode($jsonData, true); // decode JSON string into assoc array
    
    echo "<br>";
    if(json_last_error() === JSON_ERROR_NONE) {
        // successfully decoded JSON

        $currentCondition = $data['current']['condition']['text'];
        $icon = data['current']['condition']['icon'];

        <div class="w3-third">
            <div class="w3-card">
                echo "<b>Country:"
            </div>
        </div>
    }
    else {
        echo "Error: failed to be decode JSON data";
    }
}
        }
        ?>
    </div>
    
</body>
</html>