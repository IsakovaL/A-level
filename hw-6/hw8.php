<?php

echo "Give me a number:\n";

$handle = fopen("php://stdin","r");
$fizz = (int)fgets($handle);
$buzz = (int)fgets($handle);
$number = (int)fgets($handle);

echo "\n";

if ($number % 3 == 0) {
    echo("F\n");
    } elseif($number % 5 == 0) {
        echo("B\n");
    } elseif($fizz  % 3 == 0 && $buzz % 5 == 0) {
            echo("FB\n");
    }  else var_dump ($number);