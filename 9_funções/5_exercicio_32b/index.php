<?php

function nome_concatenado(){
    $nome = "joão";
    $sobrenome = "firmo";

    $nome_completo = $nome ." ". $sobrenome;
    echo $nome_completo . "<br>";
}

nome_concatenado();