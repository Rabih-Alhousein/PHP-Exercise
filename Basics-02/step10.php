<?php

function check_palindrom($str)
{
    $str = str_replace(" ", "", $str);
    if (strrev($str) == $str) {
        return 1;
    } else {
        return 0;
    };
}

echo check_palindrom('nursess run');
