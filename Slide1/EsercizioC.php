<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangoli di Asterischi</title>
    <style>
        body { font-family: monospace; }
    </style>
</head>
<body>
    <h3>Esercizio c - Stampare triangoli di asterischi</h3>

    <p><strong>Schema (a):</strong></p>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo '*';
        }
        echo '<br>';
    }
    ?>

    <p><strong>Schema (b):</strong></p>
    <?php
    for ($i = 10; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo '*';
        }
        echo '<br>';
    }
    ?>

    <p><strong>Schema (c):</strong></p>
    <?php
    for ($i = 10; $i >= 1; $i--) {
        for ($j = 1; $j <= (10 - $i); $j++) {
            echo '&nbsp;';
        }
        for ($k = 1; $k <= $i; $k++) {
            echo '*';
        }
        echo '<br>';
    }
    ?>

    <p><strong>Schema (d):</strong></p>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 10; $j > $i; $j--) {
            echo '&nbsp;';
        }
        for ($k = 1; $k <= $i; $k++) {
            echo '*';
        }
        echo '<br>';
    }
    ?>
</body>
</html>
