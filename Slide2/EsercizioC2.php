<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabella dei Quadrati e dei Cubi</title>
</head>
<body>
    <h3>Tabella dei Quadrati e dei Cubi</h3>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
       
        $n = intval($_POST['numero']);

        
        echo '<h3>Tabella dei quadrati e dei cubi per i numeri da 1 a ' . $n . ':</h3>';
        echo '<table border="1">';
        echo '<tr><th>Numero</th><th>Quadrato</th><th>Cubo</th></tr>';
        for ($i = 1; $i <= $n; $i++) {
            echo '<tr>';
            echo '<td>' . $i . '</td>';
            echo '<td>' . ($i * $i) . '</td>';
            echo '<td>' . ($i * $i * $i) . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    } else {
        
        echo '
        <form action="" method="post">
            <label for="numero"><b>Seleziona un numero intero N (da 1 a 10):</b></label>
            <select name="numero" id="numero" required>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
            <br><br>
            <input type="submit" value="Crea tabella">
        </form>
        ';
    }
    ?>
</body>
</html>
