<?php
 function alterarDados($nome, $idade) {

    $nome = "Sr. $nome";
    $idade = "$idade anos";

    return [$nome, $idade];
    
 }
 $dados = alterarDados("joão", 19);
 print_r($dados);

