<?php 
$var1 = 32;
$var2 = 45;

$tempVal = $var1;
$var1 = $var2;
$var2 = $tempVal;
echo $var1 ."\n".$var2;
