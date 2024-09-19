<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables and Operators</title>
</head>
<body>
    <h1>Variables & Operators PHP Sample</h1>

    <?php 
        echo "Variables and Operatos<br>"; // will dsiplay whatever we type to the computer
        
        //How to create comments in php
        // comment 1
        # comment 2
        /* Multiline comment */


        // variables are defined the first time they are used
        // all variables in php start with a $ sign
        $a = 8;
        $b = 3;
        $indent = "&nbsp; &nbsp; ";

        echo "<h2>Variables</h2>";
        // period is the plue sign from java when writing strings
        echo " a =  $a<br>";
        echo " b = $b<br>";

        echo "<h2>Basic Operations</h2>";
        echo " $a + $b = " .($a + $b). "<br>";
        echo " $a - $b = " .($a - $b). "<br>";
        echo " $a * $b = " .($a * $b). "<br>";
        echo " $a / $b = " .($a / $b). "<br>";
        echo " $a % $b = " .($a % $b). "<br>";

        echo "<h2>Increment/Decrement</h2>";
        echo "a = $a<br>";
        echo "b = $b<br>";
        echo "$indent Post-increment. Value of a = ".($a++)."<br>";
        echo "$indent After post-increment. Value of a = $a<br>";
        echo "$indent Pre-increment. Value of a = ".(++$a)."<br>";
        echo "$indent After pre-increment. Value of a = $a<br>";

        echo "<h2>Casting</h2>";
        $quantity = 9; // integer
        $price = 4.52; // float
        $total = $price * $quantity;
        $totalInt = (int)$total; // casting float to integer
        $paidWithCard = $total >= 10; // boolean
        echo "quantity = $quantity<br>";
        echo "price = $price<br>";
        echo "total = quantity * price<br>";
        echo "total = $total<br>";
        echo "total with no cents = $totalInt<br>";

        if($paidWithCard){
            echo "You are allowed to pay with credit card.<br>";
        } else{
            echo "You have to pay cash<br>";
        }

        echo "<h2>Constants</h2>";
        define('TAX_RATE', .065);
        define('STUDENT_DISCOUNT', .02);
        define('MILITARY_DISCOUNT', .04);

        echo "Tax rate: ".(TAX_RATE * 100)."%<br>";
        echo "Student discount: ".(STUDENT_DISCOUNT * 100)."%<br>";
        echo "Military discount: ".(MILITARY_DISCOUNT * 100)."%<br>";

        echo "<h2>Reference Operator</h2>";
        $a = 5; $b = 6;
        echo "a = $a<br>";
        echo "Let's make b = a<br>";
        $b = $a;
        echo "Now, b = a = $b<br>";
        echo "Let's icrement b by 1<br>";
        $b++;
        echo "Now b = $b<br>";
        echo "And a = $a. Notice that a kept its orginal value<br><br>";

        echo "Let's use the reference operand &<br>";
        $a = 8;
        echo "Let's make a = $a<br>";
        echo "And now, let's make b = &a<br>";
        $b = &$a;
        echo "Now, b = a = $b<br>";
        echo "Let's increment by 1<br>";
        $b++;
        echo "Now, b = $b<br>";
        echo "And a = $a. Notice that the value of a has also changed<br>";

        echo "This is because now a and b point to the same position in memory<br>";
        echo "Use unset() function to break the link<br>";

        unset($a); // will undefine the variable a 
        $b++;

        echo "a = $a, b = $b<br>"; // will give you an error language
    ?>
    </body>
</html>