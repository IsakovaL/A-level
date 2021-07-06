<?php

abstract class a_shoes {
    abstract function put_on();
}


class shoes extends a_shoes {

function put_on() {

    echo "Look at my shoes, they are amazing! \n";
    }
}

class sandals{

function put_on() {

    echo "Look at my sandals, my legs are breathing! \n";
    }
}
class sneackers{

function put_on() {
    echo "Look at my sneackers but don't eat them! \n";
    }
}

class boots{

function put_on() {
    echo "Winter boots! \n";
    }
}

class cutie{

    private $shoes;

    function get_ready($shoes)
    {
        if (method_exists($shoes, 'put_on')){
        $this->shoes = $shoes;
        $shoes->put_on();
        }
    }
}

$shoes = new shoes();
$sandals = new sandals();
$sneackers = new sneackers();
$boots = new boots();

$shoes_list = [$shoes, $sandals, $sneackers, $boots];

$lady = new cutie();

foreach ($shoes_list as $one_pair) {
    $lady->get_ready($one_pair);
}

















