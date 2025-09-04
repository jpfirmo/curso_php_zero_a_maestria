<?php

function corCarro($cor = "vermelho"){
    return "a cor do carro é: $cor";

}
$carroVermelho = corCarro();
echo $carroVermelho . "<br>";

$carroAzul = corCarro("azul");
echo $carroAzul . "<br>";
