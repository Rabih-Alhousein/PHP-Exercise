<?php
$str = 'text Python text';
function replace($str)
{
    if (strlen($str) <= 1000) {
        return str_replace("Python", "PHP", $str);
    }
}
echo replace($str);
