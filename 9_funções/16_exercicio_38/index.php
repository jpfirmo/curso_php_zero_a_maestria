<?php

$lista = ["macarrão", "arroz", "feijão", "carne"];
function itens_supermercado($arr){

    $str = "você adquiriu os seguintes itens: ";

    for($i = 0; $i < count($arr); $i++){

        if($i + 1 == count($arr)){
            $str .= "$arr[$i].";
        }else{
            $str .= "$arr[$i], ";

        }
        
    }
    
    return $str;


}
echo itens_supermercado($lista);