<?php

function Stars($n)
{
    $x = 0;
    while ($x < $n) {
        for ($i = 0; $i <= $x; $i++) {
            echo "*";
        };
        echo "<br>";
        $x++;
    }
}

Stars(7);
