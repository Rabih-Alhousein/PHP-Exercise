<?php
$text = "in this  text there three is repeated three times because three is three now three is repeated three times plus 3";
$word = "three";

function repeated($text, $word)
{
    $arrayText = explode(" ", $text);
    $count = 0;
    $i = 0;

    while ($i < sizeof($arrayText)) {
        if ($word == $arrayText[$i]) {
            $count++;
        }
        $i++;
    }
    return $count;
};
echo repeated($text, $word);
