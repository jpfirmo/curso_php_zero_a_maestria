<?php

function teste($a = "teste"){
    echo "o valor de A é: $a <br>";


}
teste();
teste("joão");

function testando($b , $a = "x"){
    echo "o valor de A é: $a e o de B é: $b";
}
testando("y");