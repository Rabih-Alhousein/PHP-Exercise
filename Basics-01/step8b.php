<?php

$arr = [
    "eggs" => ['balade', 'mazere3'],
    "milk" => ['Fresh', 'Taanayel'],
    "water-pack" => ['Tanoureen', 'Reem']
];

echo "Hey Sir, Please I need 1 pack of balade eggs and 3 Reem Water Pack <br>";
echo "Hey Sir, Please I need 1 pack of " . $arr["eggs"][0] . " eggs and 3 " . $arr["water-pack"][1] . " Water Pack ";
