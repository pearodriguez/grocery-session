<?php
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_destroy(); 
    echo "Thank you for shopping! See you next time!";
    echo "<br>";
    ?>
    <a href="mysessions.php">Click Here to Start a New Order</a>
</body>
</html>