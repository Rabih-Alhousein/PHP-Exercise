
<?php

$text = "I am Rabih Alhousein";

function reverse($text)
{
    $reversed = "";
    for ($i = strlen($text) - 1; $i >= 0; $i--) {
        $reversed .= $text[$i];
    }
    return $reversed . "<br>";
}
echo reverse($text);
