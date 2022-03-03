<?php
$arr = array(
    "MUSICALS" => ["Oklahoma", "The Music Man", "South Pacific"],
    "DRAMAS" => array("lawrence of Arabia", "To Kill a Mockingbird", "Casablanca"),
    "MYSTERIES" => ["The Maltese Falcon", "Rear Window", "North by Northwest"]
);


foreach ($arr as $key => $value) {
    echo $key . "<br>";
    foreach ($value as $k => $v) {
        echo "---> $k = $v<br>";
    }
}
