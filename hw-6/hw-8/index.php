
    <?php

echo "Give me a number less than 18:\n";

$handle = fopen("php://stdin","r");
$fizz = fgets($handle);
$buzz = fgets($handle);
$number = fgets($handle);

echo "\n";

$i = 0;
for($i = 0; $i < 18; $i++){
if ($i % 18 == 0) {
    echo("F\n");
    } elseif($i % 3 == 0) {
        echo("B\n");
    } elseif($i % 5 == 0 && $i % 5 == 0) {
            echo("FB\n");
    }  else var_dump ($i);
};