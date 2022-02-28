<?php

$number = 8208;
$total = 0;
$x = $number;
$numlength = strlen($number);
while ($x != 0) {
    $unit = $x % 10;
    $total = $total + $unit ** $numlength;
    $x = $x / 10;
}
if ($number == $total) {
    echo "Yes it is an Armstrong number";
} else {
    echo "No it is not an armstrong number";
}
