<?php
session_start();

$gioco = $_GET["nomeGioco"];
$punteggio = $_GET["punteggioGioco"];

if (!isset($_SESSION["punteggi"])) {
    $_SESSION["punteggi"] = [];
}

if(isset($_SESSION["punteggi"][$gioco])){
    if($punteggio > $_SESSION["punteggi"][$gioco]){
        $_SESSION["punteggi"][$gioco] = $punteggio;
    }
}else{
    $_SESSION["punteggi"][$gioco] = $punteggio;
}
echo "GIOCO REGISTRATO";
?>
<form action="index.php">
    <input type="submit" value="Home">
</form>
<a href="reset.php">Reset</a>
