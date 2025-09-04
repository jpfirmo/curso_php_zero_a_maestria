<?php

$pessoa = ['nome' => 'joão', 'idade' => 18, 'nacionalidade' => 'brasileiro'];
print_r($pessoa);
echo "<br>";

if ($pessoa['idade'] >= 18) {
    echo "Você é maior de idade. ";
}
