<?php
function tabung($num1, $num2){
    $result = 3.14 * 3.14 * $num1 * $num2;
    return $result;

}

$num1 = 4.2;
$num2 = 5.4;

$vol = round(tabung($num1, $num2), 3);
echo "$vol m3";
