<?php

class pessoa{
    
    function falar(){
        echo "olá pessoal!"; 
    }
}

$joao = new pessoa();
$joao->nome = "joão";
echo $joao->nome;
echo "<br>";
$joao->falar();