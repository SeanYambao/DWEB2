<?php 
$name = 'Sean';
$greeting = 'Welcome!';
if ($name === ' ') {
    $greeting + $name;
} else {
    $greeting;
}

$product = 'Chocolate Chip Cookie';
$cost = 80;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crubmy Co.</title>
    <link rel="stylesheet" href="DWEBPrelim/css/styles.css">
</head>
<body>
    <?php include "DWEBPrelim/includes/header.php" ?>
    <h2><?= $greeting ?></h2>


    <table>
        <tr>
            <th>Packs</th>
            <th>Price</th>
        </tr>
            <?php
    for ($i = 1; $i <= 10; $i++) {
        $subtotal = ($cost * $i);
        $discount = ($cost / 100) * ($i * 4);
        $totals = [$i => ($subtotal - $discount)];
    }
    ?>
        <tr>
            <td>        <?php
    for ($i = 1; $i <= 10; $i++) {
        echo $i;
        echo ' packs cost $';
        echo $cost * $i;
        echo '<br>'; 
    }
    ?></td>
        </tr>
    </table>
        <?php include "DWEBPrelim/includes/footer.php" ?>
</body>
</html>