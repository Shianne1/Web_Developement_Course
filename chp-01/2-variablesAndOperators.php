<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    h3 { color: red;} </style>
    
</head>
<body>
    <h1>Variables & Operators PHP Samples 2</h1>
    <?php
    // comparison operators 
    $a = 5; $b = 5;

    // compare values
    echo "<h3>Compare Values</h3>";
    echo "a = $a, b = $b<br>";
    if($a == $b){
        echo "a == b<br> a and b have the same value<br>";
    
    } else{
        echo "a != b<br>a and b do not have the same value<br>";
    }

    $x = 7;
    $y = "7";
    $z = 7;
    echo "<h3>Compare Values and Types</h3>";
    echo "x = $x, y = $y, z = $z<br>";
    echo "type of x is ".gettype($x)."<br>";
    echo "type of y is ".gettype($y)."<br>";
    echo "type of z is ".gettype($z)."<br>";

    if($x == $y){ // this will compare values not data types. meaning x and y have the same value
        echo " x == y<br>x and y have the same value<br>";
    } else {
        echo "x != y <br>x and y do not have the same value<br>";
    }


    if($x === $y){ // this will compare data types. meaning x and y will not have the same data types
        echo " x === y<br>x and y have the same value and datatype<br>";
    } else {
        echo "x !== y <br>x and y do not have the same value and datatype<br>";
    }

    if($x === $z){ // this will compare data types. meaning x and y will not have the same data types
        echo " x === z<br>x and y have the same value and datatype<br>";
    } else {
        echo "x !== z <br>x and y do not have the same value and datatype<br>";
    }

    echo "<h3>Logical Operators</h3>";
    $waterTemperature = 290; // in kelvin
    $boilingPoint = 373.2; // boiling point of water
    $freezingPoint = 273.2; // freezing point of water

    echo "Temperature in Kelvin<br>";
    echo "Boiling Point: $boilingPoint<br>";
    echo "Freezing Point: $freezingPoint<br>";
    echo "Water Temperature: $waterTemperature<br>";

    if(($waterTemperature > $freezingPoint) && ($waterTemperature < $boilingPoint)){
        echo "Water is in liquid state<br>";
    } else {
        if($waterTemperature <= $freezingPoint){
            echo "Waqter is frozen (solid state)<br>";
        } else{
            echo "Water is vapor (gas)<br>";
        }
    }

    echo "<br";
    // other logical operators such as || (or), xor, etc. work the same as in Java.

    echo "<h3>Ternary Operator</h3>";
    // the ternary operator is used as a short if statement 
    $age = 25;
    echo "Linda is $age years old. She is ";
    echo $age > 20? "adult<br>" : "underage<br>";

    echo "<h3>Error Suppersion Operator</h3>";
    $a = 25; $b = 0;

    echo "$a / $b = <br>";
    //echo @($a / $b); // then divide by zero error has been suppressed


    echo "<h3>The excution Operator</h3>";
    // use backticks
    $out = `dir`;

    echo "<pre>$out</pre>";
    ?>
</body>
</html>