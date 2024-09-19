<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ch3-PHP Arrays</title>
    <style>
        h2{ color: blueviolet;}
    </style>
</head>
<body>
    <h1>Ch3 - PHP Arrays</h1>
    <?php 
    echo "<h2>Numerically Indexed</h2>";

    $burgerArray = array("Burger King", "McDonald's", "BurgerFi", "Five Guys", "Wendys", "Whataburger", "Checkers");

    $mexicanFoodArray = ["Chipotle", "Moes", "Taco Bell", "Del Taco", "Willys", "On the border"]; // brackets are another way to declear a array.

    $pizzaArray = ["Pizza Hut", "Little Caesars", "Dominos", "Jets Pizza", "Papa Johns"];

    $numbers = range(1, 10);
    $odds = range(1, 10, 2);
    $letters = range('a', 'z');

    echo "<h3> Convert arrays to string and then display</h3>";

    // converting array elements into strings using implode function
    echo implode(" ", $burgerArray)."<br>";
    echo implode(" ", $mexicanFoodArray)."<br>";
    echo implode(" ", $pizzaArray)."<br>";
    echo implode(" ", $numbers)."<br>";
    echo implode(" ", $odds)."<br>";
    echo implode(" ", $letters)."<br>";

    echo "<h3>Adding Elements</h3>";
    echo "Appending 'Sonic' and 'White Castle' to the end<br>";
    array_push($burgerArray, "Sonic", "White Castle"); // apends new elements to the array
    echo implode(" ", $burgerArray)."<br>";

    echo "<br>Inserting ['Frontera', 'La Bamba'] on the second position<br>";
    $newMexican = ['Frontera', 'La Bamba'];
    array_splice($mexicanFoodArray, 2, 0, $newMexican); // will insert the elements into new array.
    echo implode(" ", $mexicanFoodArray)."<br>";

    echo "<h3>Looping</h3>";
    echo "Using a loop ariable<br>";
    if(is_countable($mexicanFoodArray)){
        for($i = 0; $i < count($mexicanFoodArray); $i++){
            echo $mexicanFoodArray[$i]. ", ";
        }
    }
    echo "<br><br>Using foreach<br>";
    if(is_countable($pizzaArray)){
        foreach($pizzaArray as $pizza){
            echo $pizza.", ";
        }
    }

    echo "<h2>Associative Arrays</h2>";

    //associatiearrays are composed of <Key = > Value pairs
    $age = array('Heather' =>20, 'Clarissa' => 21, 'Ken' => 19, 'Marcus' => 18);
    echo "Heather: ".$age['Heather']."<br>";
    echo "Clarissa: ".$age['Clarissa']."<br>";   
    echo "Ken: ".$age['Ken']."<br>";   
    echo "Marcus: ".$age['Marcus']."<br>";  
    // MISSING WORK HERE. FILL IN THE NAMES AND AGE
    
    
    echo "<h3>Looping</h3>";
    echo "Using foreach<br>";
    foreach($age as $key => $value){
        echo "$key: $value<br>";
    }

    echo "<h3>Calculate sum and average age</h3>";
    $sum = array_sum($age);
    $avg = $sum / count ($age);
    echo "Sum: $sum<br>";

    echo "<h2>Multidimesional Arrays</h2>";
    $countries = [['United States', 'Canda', 'Mexico'], 
    ['Honduras','Guatemala', 'Costa Rica'], 
    ['Jamaica', 'Dominican Republic', 'Haiti']];

    // MISSING WORK HERE. TOOK PHOTO
    echo "<h3>Accessing individual elements</h3>";
    echo "[0][1]: ".$countries[0][1]."<br>";
    echo "[1][2]: ".$countries[1][2]."<br>";


    echo "<h3>Looping with foreach</h3>";
    foreach($countries as $keyRow => $valueList) {
        foreach($valueList as $keyCol => $value){
            echo "[$keyRow][$keyCol] = $value";
        }
        // display a line break after each subarray
        echo "<br>";
    }
    ?>
    
</body>
</html>