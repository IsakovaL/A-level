<?php

abstract class Animal
{
    public $name;

    abstract function voice();

    abstract function move();

    function ask_food()
    {
        $this->voice();
        $this->move();
    }

}

class Cat extends Animal
{


    function voice()
    {
        // TODO: Implement voice() method.
        echo "Cat " . $this->name . ": Miau-miau! \n";
    }

    function move()
    {
        // TODO: Implement move() method.
        echo "I shake my tail \n";
    }
}

class Dog extends Animal
{
    function voice()
    {
        // TODO: Implement voice() method.
        echo "Dog: " . $this->name . " Gav-gav! \n";
    }

    function move()
    {
        // TODO: Implement move() method.
        echo "I give you my paw! \n";
    }
}

$cat = new Cat();
$cat->name = "Murka";

$dog = new Dog();
$dog->name = "Bobik";

$cat2 = new Cat();
$cat2->name = "Vasiliy";

function hungry($animal)
{
    $animal->ask_food();
};

$arr = [$cat, $cat2, $dog];

foreach ($arr as $anim) {
    hungry($anim);
};



