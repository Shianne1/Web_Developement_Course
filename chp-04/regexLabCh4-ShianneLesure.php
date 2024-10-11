<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "https://www.w3schools.com/w3css/4/w3.css">
    <title>Lab Ch4 Regex</title>
</head>
<body>
    <div class="container w3-blue-grey">
        <header class="container w3-center">
            <h1>Lab Ch4 Regular Expressions (regex)</h1>
            <h2>by Shianne Lesure</h2>
        </header>

        <form class="container w3-sand" action="regexLabCh4-ShianneLesure.php" method="POST"> 
            <fieldset>
                <!--First name-->
                <label>First Name</label>
                <input class="w3-input w3-border" type="text" name="fName" value="<?php echo $fName;?>" />
                <div class="w3-red"><?php echo htc($errors['fName']); ?></div>

               <!--Last name-->
               <label>Last Name</label>
                <input class="w3-input w3-border" type="text" name="lName" value="<?php echo $lName;?>" />
                <div class="w3-red"><?php echo htc($errors['lName']); ?></div>
                
                <!--Email-->
                <label>Email</label>
                <input class="w3-input w3-border" type="text" name="email" value="<?php echo $email;?>" />
                <div class="w3-red"><?php echo htc($errors['email']); ?></div>

                <!--Phone Number-->
                <label>Phone Number</label>
                <input class="w3-input w3-border" type="text" name="phoneNumber" value="<?php echo $phoneNumber;?>" />
                <div class="w3-red"><?php echo htc($errors['phoneNumber']); ?></div>

                <!--Street-->
                <label>Street</label>
                <input class="w3-input w3-border" type="text" name="street" value="<?php echo $street;?>" />
                <div class="w3-red"><?php echo htc($errors['street']); ?></div>

                <!--City-->
                <label>City</label>
                <input class="w3-input w3-border" type="text" name="city" value="<?php echo $city;?>" />
                <div class="w3-red"><?php echo htc($errors['city']); ?></div>

                <!--State-->
               <label>State</label>
                <input class="w3-input w3-border" type="text" name="state" value="<?php echo $state;?>" />
                <div class="w3-red"><?php echo htc($errors['state']); ?></div>
                
                <!--Zip-->
                <label>Zip</label>
                <input class="w3-input w3-border" type="text" name="zip" value="<?php echo $zip;?>" />
                <div class="w3-red"><?php echo htc($errors['zip']); ?></div>

                <!--regex 1-->
                <label>regex1 - All strings containing 'abc'</label>
                <input class="w3-input w3-border" type="text" name="regex1" value="<?php echo $regex1;?>" />
                <div class="w3-red"><?php echo htc($errors['regex1']); ?></div>

                <!--regex 2-->
                <label>regex2 - All strings containing 3 consecutive digits</label>
                <input classs="w3-input w3-border" type="text" name="regex2" value="<?php echo $regex2;?>" />
                <div class="w3-red"><?php echo htc($errors['regex2']); ?></div>

                <!--regex 3-->
                <label>regex3 - All strings containing 3 non-consecutive digits</label>
                <input class="w3-input w3-border" type="text" name="regex3" value="<?php echo $regex3;?>" />
                <div class="w3-red"><?php echo htc($errors['regex3']); ?></div>

            </fieldset>

            <p><input class="w3-btn w3-blue-grey" type="submit" name="submit" value="Submit" /></p>
        </form>

        <div class="container w3-sand">
            <?php 
                if(isset($_POST[submit]) && !array_filter($errors)){
                    echo "Success! All data is valid!";
                }
            ?>
        </div>
    </div>
</body>
</html>