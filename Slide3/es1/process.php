<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dati Utente</title>
</head>
<body>
    <h3>Dati Inseriti</h3>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_POST['nome']);
        $cognome = htmlspecialchars($_POST['cognome']);
        $dataNascita = htmlspecialchars($_POST['dataNascita']);
        $codiceFiscale = htmlspecialchars($_POST['codiceFiscale']);
        $email = htmlspecialchars($_POST['email']);
        $cellulare = htmlspecialchars($_POST['cellulare']);
        $via = htmlspecialchars($_POST['via']);
        $cap = htmlspecialchars($_POST['cap']);
        $comune = htmlspecialchars($_POST['comune']);
        $provincia = htmlspecialchars($_POST['provincia']);
        $nickname = htmlspecialchars($_POST['nickname']);
        $password = htmlspecialchars($_POST['password']);

        echo "<p>Nome: $nome</p>";
        echo "<p>Cognome: $cognome</p>";
        echo "<p>Data di Nascita: $dataNascita</p>";
        echo "<p>Codice Fiscale: $codiceFiscale</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Cellulare: $cellulare</p>";
        echo "<p>Indirizzo: $via, $cap, $comune, $provincia</p>";
        echo "<p>Nickname: $nickname</p>";
        echo "<p>Password: $password</p>";
    }
    ?>
</body>
</html>
