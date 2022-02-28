<?php

function sumDigits($n)
{
    $x = $n;
    $sum = 0;
    for ($i = 0; $i < strlen((string) $n); $i++) {
        $unit = $x % 10;
        $sum = $sum + $unit;
        $x = $x / 10;
    }
    return $sum;
}

echo sumDigits(123455);
