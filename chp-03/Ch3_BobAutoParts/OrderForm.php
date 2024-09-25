<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bob Auto Parts-Order Form</title>
    <link rel = "stylesheet" href = "https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class = "w3-sand">
    <div class="w3-container w3-center w3-pale-green">
        <h1>Bob's Auto Parts</h1>
        <h2>Order Form</h2>
    </div>

    <?php include "menu.php"; ?>
    <form action="ProcessOrder.php" method = "post">
        <table class="w3-table w3-table-all">
            <tr class="w3-blue-gray">
                <th>Item</th>
                <th>Quantity</th>
            </tr>
            <tr>
                <td>Tires</td>
                <td><input type="text" name = "tireqty" size="3" maxlength="3"></td>
            </tr>
            <tr>
                <td>Oil</td>
                <td><input type="text" name = "oilqty" size="3" maxlength="3"></td>
            </tr>
            <tr>
                <td>Spark plugs</td>
                <td><input type="text" name = "sparkqty" size="3" maxlength="3"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name = "address" size="50" maxlength="50"></td>
            </tr>
        </table>
        <input type="submit" value="Submit order"/>
    </form>
    
</body>
</html>