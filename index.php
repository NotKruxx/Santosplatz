<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santosplatz</title>
</head>
<body>
    <marquee><h1>Santosplatz is the new Alexanderplatz</h1></marquee>
    <form action="index.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" placeholder="Scrivi il tuo nome">
        <br>
        <input type="checkbox" name="salva" value="si">Salva il mio nome
        <br>
        <label for="eta">Età:</label>
        <input type="number" name="eta" placeholder="Scrivi la tua eta">
        <input type="submit" value="Invia">
    </form>
    <form action="index.php" method="post">
        <input type="submit" name="cancella" value="cancella il cookie">
    <hr>
    <a href="Homepage.php">Homepage</a>
    <br>
    <hr>
</body>
</html>

<?php

    session_start(); //Faccio partire la sessione

    if (isset($_POST['nome']) && isset($_POST['eta'])) {
        $nome = $_POST['nome'];
        if (isset($_COOKIE['nome'])) {
            echo "Ciao " . $_COOKIE['nome'] . ", bentornato su questa pagina!";
        } else {
            echo "Ciao " . $nome . ", benvenuto su questa pagina!
            <br>
            Ora ti sto creando un cookie con il tuo nome!";
            setcookie('nome', $_POST['nome'], time() + 60 * 60); //Creo cookie
        }
        $_SESSION['eta'] = $_POST['eta']; //Do un valore alla sessione
    }

    if (isset($_POST['cancella'])) {
        setcookie('nome', '', time() - 60 * 60); //Cancello cookie
    }
?>