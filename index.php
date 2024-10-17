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
    <form action="riepilogo.php" method="post">
        <b>Nome:</b><input type="text" name="nomeGioco">
        <b>Punteggio:</b><input type="number" min="0" max="1000" name="punteggioGioco"><br>
        <br>
        <input type="submit" value="conferma" name="bottone">
    </form>
</body>
</html>