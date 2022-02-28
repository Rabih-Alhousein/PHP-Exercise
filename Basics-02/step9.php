<?php


function my_sqrt($n)
{
    $x = $n;
    $y = 1;
    while ($x > $y) {
        $x = ($x + $y) / 2;
        $y = $n / $x;
    }
    return $x;
}
echo my_sqrt(2);
