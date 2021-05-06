
    <?php

echo "Give me a number\n";

$handle = fopen("php://stdin","r");
$fizz = (int)fgets($handle);
$buzz = (int)fgets($handle);
$number = (int)fgets($handle);

echo "\n";

$i = 0;
for($i = 0; $i < $number; $i++){
if ($i % $fizz== 0) {
    echo("F\n");
    } elseif($i % $buzz== 0) {
        echo("B\n");
    } if($i % (int)$fizz == 0 && $i % (int)$buzz == 0) {
            echo("FB\n");
    };
};