<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve selected crypto data
    $selectedCryptoData = isset($_POST['selectedCryptoData']) ? $_POST['selectedCryptoData'] : null;

    // Decode the JSON data into an associative array
    $crypto = json_decode($selectedCryptoData, true);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Selected Crypto</title>
</head>
<body>
    <h2>You have selected the following cryptocurrency:</h2>

    <?php if ($crypto): ?>
        <div>

            
            <!-- Check if imageUrl is set and display the image -->
            <?php if (isset($crypto['imageUrl'])): ?>
                <img src="<?= $crypto['imageUrl'] ?>" alt="<?= $crypto['symbol'] ?>" width="50">
            <?php endif; ?>
            <h3><?= $crypto['name'] ?> (<?= $crypto['symbol'] ?>)</h3>
            <h3><?= $crypto['amount'] ?></h3>
            <h3><?= $crypto['wallet'] ?></h3>
        </div>
    <?php else: ?>
        <p>No cryptocurrency selected.</p>
    <?php endif; ?>

</body>
</html>
