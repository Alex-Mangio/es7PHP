<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punteggio Gioco</title>
</head>
<body style="text-align:center"> 
    
    <h1>INSERISCI IL NOME E IL PUNTEGGIO DEL GIOCO</h1>
    <form action="riepilogo.php" method="get">
        <b>Nome:</b><input type="text" name="nomeGioco" required>
        <b>Punteggio:</b><input type="number" min="0" max="1000" name="punteggioGioco" required><br>
        <br>
        <input type="submit" value="conferma" name="bottone">
    </form>
    <br>
    <form action="punteggio_max.php" method="get">
        <input type="submit" value="punteggi max">
    </form>
    <a href="reset.php">Reset</a>
</body>
</html>