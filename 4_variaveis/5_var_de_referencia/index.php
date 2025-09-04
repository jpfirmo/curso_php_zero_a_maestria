<?php

$x = 10;
$y =& $x;
echo $x;
echo "<br>";
echo $y;
echo "<br>";

$y = 15;
echo "atribuição após referência";
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";

$x = 20;
echo "atribuição após referência 2";
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";
