<?php

$nomes = ["maria", "mateus", "joão", "pedro"];

foreach ($nomes as $nome){
    echo "o nome do indice atual é: ". $nome ."<br>";
    if($nome == "joão"){
        echo "meu nome é ". $nome . "<br>" ;
    }
}