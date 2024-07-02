<?php

$num1 = 4;
$num2 = 5;
$num3 = 6;

if ($num1 > $num2 && $num1 > $num3) {
    echo $num1;
} elseif ($num2 > $num1 && $num2 > $num3) {
    echo $num2;
} elseif ($num3 > $num1 && $num3 > $num2) {
    echo $num3;
} else {
    echo "there is a problem sorry bro";
}