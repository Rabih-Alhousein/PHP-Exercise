<?php
function greaterFn($num)
{
if ($num > 30) {
return "$num is greater than 30";
} elseif ($num > 20) {
return "$num is greater than 20";
} elseif($num>10) {
return "$num is greater than 10";
} else {
return "$num is less than 10";

}
}

echo greaterFn(35) . "\n";
echo greaterFn(25) . "\n";
echo greaterFn(15) . "\n";
echo greaterFn(5) . "\n";
?>