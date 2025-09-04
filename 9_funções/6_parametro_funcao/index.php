<?php

function velocidade_maxima($vel){

    echo "o carro atinge a velocidade máxima de $vel km/h <br>";

}

velocidade_maxima(200);
velocidade_maxima(300);
velocidade_maxima(400);

$velocidade = 225;
velocidade_maxima($velocidade);

//não pode executar uma função pq ela requer o valor da variável
//velocidade_maxima();

//vai rodar normalmente mais vai desconsiderar a String teste 
//velocidade_maxima(210, "teste");
