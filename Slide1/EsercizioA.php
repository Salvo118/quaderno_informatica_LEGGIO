<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabella Pitagorica</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            text-align: center;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
        }
        th {
            background-color: #f4f4f4;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Tabella Pitagorica</h1>
    <table>
        <thead>
            <tr>
                <th></th>
                <?php
                // Intestazione della tabella
                for ($i = 1; $i <= 10; $i++) {
                    echo "<th>$i</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            // Creazione delle righe della tabella
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                // Prima colonna 
                echo "<th>$i</th>";
                for ($j = 1; $j <= 10; $j++) {
                    // Celle con il prodotto
                    echo "<td>" . ($i * $j) . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
