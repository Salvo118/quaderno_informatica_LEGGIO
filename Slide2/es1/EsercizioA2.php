<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .error { color: red; }
    </style>
</head>
<body>
    <h3>Accesso a pagina riservata</h3>
    <?php
    
    $error = '';
    $showForm = true;

    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usr = $_POST['username'];
        $pwd = $_POST['password'];

        
        if ($usr == 'admin' && $pwd == 'password') {
            echo '<b>Benvenuto ' . htmlspecialchars($usr) . '!</b><br>';
            echo 'Nell\'area riservata del sito!<br>';
            $showForm = false;
        } else {
            $error = 'Attenzione! Nome utente o password sbagliate.';
        }
    }

    
    if ($showForm) {
        if ($error) {
            echo '<p class="error">' . $error . '</p>';
        }
        echo '
        <form action="" method="post">
            <label for="username"><b>Username</b></label>
            <input type="text" name="username" placeholder="Inserisci il nome utente" required><br>
            <label for="password"><b>Password</b></label>
            <input type="password" name="password" placeholder="Inserisci la password" required><br>
            <input type="submit" value="Invia">
        </form>
        ';
    }
    ?>
</body>
</html>
