<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>

</body>
</html>

<?php

    session_start();

    if (isset($_SESSION['eta'])) {
        echo "La tua età è: " . $_SESSION['eta'];
    } else {
        echo "Per qualche errore la sessione si è interrotta!";
    }
    if (isset($_COOKIE['nome'])) {
        echo "Ciao " . $_COOKIE['nome'] . ", benvenuto nella homepage!";
    } else {
        echo "Ciao, non hai un cookie o ti è scaduto!";
    }

    echo "<br>";
    echo "Ora termino la sessione!";
    session_destroy();

?>