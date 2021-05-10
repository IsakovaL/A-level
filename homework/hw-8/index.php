<?php

echo "Give me a number\n";

$handle = fopen("php://stdin","r");
$fizz = (int)fgets($handle);
$buzz = (int)fgets($handle);
$number = (int)fgets($handle);

echo "\n";

$i = 1;
for($i = 1; $i <= $number; $i++) {

    if($i % $fizz == 0 && $i % $buzz == 0) {
        echo("FB\n"); 
        } elseif($i % $fizz == 0) {
            echo("F\n");
        } elseif($i % $buzz == 0) {
            echo("B\n");
        }  else echo("$i\n");
    };