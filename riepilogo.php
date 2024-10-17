<?php
session_start();


if (isset($_POST["bottone"])) {
    if (!empty($_POST["nomeGioco"]) && !empty($_POST["punteggioGioco"])) {
        echo "<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset=UTF-8>
    <meta name=viewport content=width=device-width, initial-scale=1.0>
    <title>Punteggio</title>
</head>

<body>

    <b>Nome del gioco:</b>" . $_POST["nomeGioco"] . "<b>e il tuo punteggio é di:</b>" . $_POST["punteggioGioco"] . "<b>punti</b><br>
    <br>";

        $nomeGame = $_POST["nomeGioco"];
        $punteggioGame = $_POST["punteggioGioco"];

        if (isset($_SESSION["scores"][$nomeGame])) {
            if ($_SESSION["scores"]["nomeGame"] < $score) {
                $_SESSION["scores"]["nomeGame"] = $score;
            } else {
                $_SESSION["scores"]["nomeGame"] = $score;
            }
        }

        echo "<table border=1>
    <tr><th>GIOCO</th><th>SCORE</th></tr>";

        foreach ($_SESSION as $gioco) {
            echo "<tr><td>" . print_r($gioco) . "</td><td></td></tr>";
        }


        echo "</table>
    <a href=index.php>
        <input type=submit value=Home>
    </a>
    
</body>

</html>";
    } else {
        echo "<p>Non hai inserito tutti i dati</p>";
    }
}
