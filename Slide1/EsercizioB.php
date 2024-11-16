<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saluto Personalizzato</title>
</head>
<body>
    <?php
    
    $nome = "Paolo";

    
    date_default_timezone_set("Europe/Rome");
    $ora = (int)date("H");

    
    if ($ora >= 8 && $ora < 12) {
        $saluto = "Buongiorno";
    } elseif ($ora >= 12 && $ora < 20) {
        $saluto = "Buonasera";
    } else {
        $saluto = "Buonanotte";
    }

    
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    if (strpos($userAgent, "Chrome") !== false) {
        $browser = "Chrome";
    } elseif (strpos($userAgent, "Firefox") !== false) {
        $browser = "Firefox";
    } elseif (strpos($userAgent, "Safari") !== false) {
        $browser = "Safari";
    } elseif (strpos($userAgent, "Edge") !== false) {
        $browser = "Microsoft Edge";
    } else {
        $browser = "un browser sconosciuto";
    }

   
    echo "<h1>$saluto $nome</h1>";
    echo "<p>Stai usando il browser $browser.</p>";
    ?>
</body>
</html>
