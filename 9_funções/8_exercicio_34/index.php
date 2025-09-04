<?php

function verificador_par_impar($num){
    if($num % 2 == 0){
        echo $num . " é par <br>";
    }else{
        echo $num . " é ímpar <br>";
    }
    
}
verificador_par_impar(78);
verificador_par_impar(65);