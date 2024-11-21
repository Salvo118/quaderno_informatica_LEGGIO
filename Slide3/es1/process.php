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
        $password = htmlspecialchars($_POST['password']);

        // salvataggio
        $file = "dati_login.txt"; 
        $entry = "Email: $email, Password: $password\n";
   
        //creazione file
        if (file_put_contents($file, $entry, FILE_APPEND)) {
            //messaggio di registrazione avvenutoa
            echo "<h3>Registrazione avvenuta con successo!</h3>";
        } else {
            // errore nel salvataggio
            echo "<h3>Errore durante il salvataggio. Riprova più tardi.</h3>";
        }
        // ti manda al form
        header("Refresh: 2; url=esa.html"); 
        exit(); 
        } else {
        
            echo "<h3>Accesso non autorizzato!</h3>";
        }
    ?>
</body>
</html>
