<?php

$arr = [0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$x = 1;

while($x < count($arr)) {

    $numeroAtual = $arr[$x];
    if($numeroAtual == 30 || $numeroAtual == 40) {
        $x++;
        continue;
    }
    echo "elementos: $numeroAtual <br>";
    $x++;
}