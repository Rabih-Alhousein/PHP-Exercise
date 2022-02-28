<?php
$name = "rabih ";
$position = "student";
$github_url = "https://github.com/Rabih-Alhousein";

$a = "hello I'm " . $name . " I'm a " . $position . " please check my github link " . $github_url;
$b = "hello I'm   $name   I'm a   $position   please check my github link  $github_url";
$c =  <<<END
Hello, I'm {$name}, 
I'm a $position 
please check my github link {$github_url}"
END;


echo nl2br("1 $a \n 2 $b \n 3 $c");
