<?php

if(is_int(5)){//true
    echo "é um número inteiro <br>";
}

if(is_int("não é inteiro")){//false
    echo "é um número inteiro 2 <br>";
}

$a = 10;
if(is_int($a)){//true
    echo "é um número inteiro 3 <br>";
}

