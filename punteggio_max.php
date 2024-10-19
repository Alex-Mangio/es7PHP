<?php

session_start();

$max = -1;
echo "LISTA DEI VIDEOGIOCHI:";

foreach($_SESSION["punteggi"] as $gioco => $punt){
    echo "<ul><li>$gioco $punt</li></ul>";
    
    if($punt > $max){
        $max = $punt;
    }

}

echo "Il punteggio massimo e': ". $max;