<?php

$a = 10;

while ($a > 0) {
    echo "executando loop $a <br>";

    if ($a % 2 == 0) {
        $a--;
    }else{
        continue;

    }

    $a--;
}
