<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>

<body>
    <h2>Your Cart: </h2>
    <?php

    if (isset($_POST['submit'])) {
        $_SESSION['bananas'] = $_POST['num_bananas'];
        $_SESSION['apples'] = $_POST['num_apples'];
        $_SESSION['eggs'] = $_POST['num_eggs'];
        $_SESSION['bread'] = $_POST['num_bread'];
        $_SESSION['milk'] = $_POST['num_milk'];
        $_SESSION['juice'] = $_POST['num_juice'];
    }

    echo "Bananas: " . $_SESSION['bananas'] . "<br>";
    echo "Apples: " . $_SESSION['apples'] . "<br>";
    echo "Dozen of Eggs: " . $_SESSION['eggs'] . "<br>";
    echo "Loaf of Bread: " . $_SESSION['bread'] . "<br>";
    echo "Milk: " . $_SESSION['milk'] . "<br>";
    echo "Juice: " . $_SESSION['juice'] . "<br>";
    ?>
    <p><a href="mysession_destroy.php">Checkout</a></p>
</body>

</html>