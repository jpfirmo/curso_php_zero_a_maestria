<?php

$a = 60;
$b = 5;
$c = "joao";


if(is_int($a) or is_float($a)){
    $e = $a * 2;

    if($e > 100){
        echo "o número é maior que 100 <br>";
    }else{
        echo "o numero não é maior que 100 <br>";
    }
    
}else{
    echo "nem entrou no primeiro if 1 <br>";

}

if(is_int($b) or is_float($b)){
    $e = $b * 2;

    if($e > 100){
        echo "o número é maior que 100 <br>";
    }else{
        echo "o numero não é maior que 100 <br>";
    }
    
}else{
    echo "nem entrou no primeiro if 2 <br>";

}

if(is_int($c) or is_float($c)){
    $e = $c * 2;

    if($e > 100){
        echo "o número é maior que 100 <br>";
    }else{
        echo "o numero não é maior que 100 <br>";
    }
    
}else{
    echo "nem entrou no primeiro if 3 <br>";

}