<?php

$carro = ['vermelho', 'rapido', 'pequeno', 'marca' => 'ferrari', 'velocidade_max' => 300];
echo $carro[0];
echo "<br>";
echo $carro[2];
echo "<br>";
$marca = $carro['marca'];
$velocidade_max = $carro['velocidade_max'];
echo "carro da marca $marca alcança a velocida máxima de $velocidade_max";