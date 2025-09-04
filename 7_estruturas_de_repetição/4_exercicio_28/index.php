<?php

$contador = 4;

while ($contador < 30) {
    echo "contador: " . $contador . "<br>";
    if ($contador == 24){
        echo "loop encerrado <br>";
        break;
    } 
    $contador+=2;

}