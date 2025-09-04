<?php

$a = 10;
$b = 15;

function testeEscolpo() {
    
    $a = 5;
    echo "testando escolpo local $a <br>";

    global $b;
    $b++;
    echo "testando escolpo global na função $b <br>";

}

echo "testando escolpo global $a <br>";
echo "testando escolpo global na função $b <br>";
testeEscolpo();
echo "testando escolpo global na função 2 $b <br>";