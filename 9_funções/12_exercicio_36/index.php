<?php

$arr = [];

for($i = 0; $i <= 30; $i++) {

    array_push($arr, $i);
}

print_r($arr) ;

function arrayMaiorQueSete ($array){
    
    $arrayRetorno = [];

    for($x = 0; $x < count($array); $x++){
        if($array[$x] > 7){
            array_push($arrayRetorno, $array[$x]);
        }

        
    }
    return $arrayRetorno;

}

$novoArray = arrayMaiorQueSete($arr);
print_r($novoArray);