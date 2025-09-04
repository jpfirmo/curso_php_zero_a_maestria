<?php

$a =[1, 2, 3];
//echo $a; errado pois aqui o echo tenta converter o array em String
print_r($a);
echo "<br>";
echo $a[0]; //aqui pode ser utilizado o echo pra imprimir determinado elemento atraves do seu indice
$b =["matheus", 1, true];
echo "<br>";
print_r($b);
echo "<br>";
echo $b[2];