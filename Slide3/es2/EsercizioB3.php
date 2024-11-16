<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dati Utente</title>
    <style>
        .error { color: red; }
    </style>
</head>
<body>
    <h3>Dati Inseriti</h3>
    <?php
    $errors = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = trim(htmlspecialchars($_POST['nome']));
        $cognome = trim(htmlspecialchars($_POST['cognome']));
        $dataNascita = trim(htmlspecialchars($_POST['dataNascita']));
        $codiceFiscale = trim(htmlspecialchars($_POST['codiceFiscale']));
        $email = trim(htmlspecialchars($_POST['email']));
        $cellulare = trim(htmlspecialchars($_POST['cellulare']));
        $via = trim(htmlspecialchars($_POST['via']));
        $cap = trim(htmlspecialchars($_POST['cap']));
        $comune = trim(htmlspecialchars($_POST['comune']));
        $provincia = trim(htmlspecialchars($_POST['provincia']));
        $nickname = trim(htmlspecialchars($_POST['nickname']));
        $password = trim(htmlspecialchars($_POST['password']));

        
        if ($nickname === $nome || $nickname === $cognome) {
            $errors[] = "Il nickname deve essere diverso dal nome e dal cognome.";
        }

        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "L'email inserita non è valida.";
        }

        if (empty($errors)) {
            echo "<p>Nome: $nome</p>";
            echo "<p>Cognome: $cognome</p>";
            echo "<p>Data di Nascita: $dataNascita</p>";
            echo "<p>Codice Fiscale: $codiceFiscale</p>";
            echo "<p>Email: $email</p>";
            echo "<p>Cellulare: $cellulare</p>";
            echo "<p>Indirizzo: $via, $cap, $comune, $provincia</p>";
            echo "<p>Nickname: $nickname</p>";
            echo "<p>Password: $password</p>";
        } else {
            echo '<div class="error">';
            foreach ($errors as $error) {
                echo "<p>$error</p>";
            }
            echo '</div>';
        }
    }
    ?>
</body>
</html>
