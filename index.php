<?php 
$username = 'Sean Yambao';
$greeting = 'Hello';
$offer = ['Chocolate chip cookies', 5, 80, 380];
$usual_price = ($offer[1] * $offer[2]);
$offer_price = ($offer[1] * $offer[3]);
$saving = ($offer_price - $usual_price);
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
    <div>
    <h1><?= $saving ?></h1>
    </div>
    <h2><?= $greeting ?> <?= $username ?></h2>
    
    <p>Buy <?= $offer[1] ?> of <?= $offer[0] ?> for only <?= $offer[3] ?> </p>

    <?php include "DWEBPrelim/includes/footer.php" ?>
</body>
</html>