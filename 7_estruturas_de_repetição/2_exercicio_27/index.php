<?php

$arr = [1,2,3.14,"joão","pedro",true,false,"8","firmo",10];
$x = count($arr);
$y = 0;

while($y < $x) {
    if(is_string($arr[$y])) {
    echo $arr[$y] . "<br>";
   }
   $y++;
   
}