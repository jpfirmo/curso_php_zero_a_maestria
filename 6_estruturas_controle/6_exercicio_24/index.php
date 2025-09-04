<?php

$string = "joao";
$int = 10;
$boolean = true;

if(is_int($string)){
    echo "essa variavel é do tipo inteiro <br>";
}else{
    echo "essa variavel é de outro tipo <br>";
}

if(is_int($int)){
    echo "essa variavel é do tipo inteiro 2 <br>";
}else{
    echo "essa variavel é de outro tipo 2 <br>";
}

if(is_int($boolean)){
    echo "essa variavel é do tipo inteiro 3 <br>";
}else{
    echo "essa variavel é de outro tipo 3 <br>";
}

