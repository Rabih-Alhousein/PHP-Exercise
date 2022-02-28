<?php

$num = 123;
$string = strval($num);
$sum = 0;
for ($i = 0; $i < strlen($num); $i++) {
    $sum += $string[$i];
}
echo $sum;
