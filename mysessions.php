<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Session</title>
</head>

<body>
    <h2>Products to Order:</h2>
    <form action="mysession_checkout.php" method="POST">
        <p>Bananas: <input type="text" name="num_bananas" /></p>
        <p>Apples: <input type="text" name="num_apples" /></p>
        <p>Dozen of Eggs: <input type="text" name="num_eggs" /></p>
        <p>Loaf of Bread: <input type="text" name="num_bread" /></p>
        <p>Milk: <input type="text" name="num_milk" /></p>
        <p>Juice: <input type="text" name="num_juice" /></p>
        <p><input type="submit" name="submit" value="Submit" /></p>
    </form>

</body>

</html>