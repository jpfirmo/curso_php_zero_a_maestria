<?php

$arr = [0];

while ($arr[0] < 100) {
    if ($arr[0] != 30 and $arr[0] != 40) {
        echo "array: " . $arr[0] . "<br>";
    }

    $arr[0] += 10;
}
