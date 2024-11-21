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

    
    <?php
    // a
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo '*';
        }
        echo '<br>';
    }
    ?>


    <?php
    //b
    for ($i = 10; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo '*';
        }
        echo '<br>';
    }
    ?>

    
    <?php
    //c
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

    
    <?php
    //d
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
