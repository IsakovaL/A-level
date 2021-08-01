<?php

// AInfo
// - title
// - genres
// - length
// - year
// - directors
// - actors
// - IMDBrating

// AInfo -> Movie
// - partOfFranchise

// Dark Knight
// - фантастика-комикс-экранизация
// - 150
// - 2008
// - Нолан
// - Хит Леджер,Бейл
// - Бетмен - Нолана
// - 9.6

// AInfo -> Serie
// - inviteStars
// - season

// Movie -> Series
// - numberOfSeries
// - numberOfSesons

// Во все тяжкие
// - криминал-триллер-драма
// - 40
// - 2007
// - разные()
// - Пол, Крэнгстон, Эспозито
// - Во все тяжкие - вселенная
// - 9.5
// - 5*12
// - 5

// Users
// - firstName
// - lastName
// - login
// - password

// PersonalPage
// - recomendations
// - selectedPoster
// - favorites
// - seen
// - inProgress

// abstract class Info {
//     $title;
//     $genres;
//     $length;
//     $year;
//     $directors;
//     $actors;
//     $IMDBrating;
// }
// class Movie extends Info {
//     private $partOfFranchise;
// }

// class Serie extends Info {
//     private $inviteStars;
//     private $season;
// }
// class Series extends Movie {

// }




abstract class WritingThing
{

    function __invoke()
    {
        echo "I am writing with my ".strtolower(get_class($this))." \n";
        echo $this->additionalInfo() ."\n";
    }
    function __call($method, $params) {
    if($method == "additionalInfo") {
        return "Eh..";
    }

}
    // abstract protected function additionalInfo();

}


class Pencil extends WritingThing {
    // protected function additionalInfo(){
    //     return "";
    // }
}

class Feather extends WritingThing
{
    // protected function additionalInfo(){
    //     return "";
    // }
}

class Pen extends WritingThing
{
    // protected function additionalInfo(){
    //     return "";
    // }
}

class Knife extends WritingThing
{
    protected function additionalInfo(){
        return "HAHAHAH";
    }

}


class Person {

    public $age, $name, $surname, $gender;
    private $thing;

    function take_something($thing) {
        if(!is_object($thing)) return false;
        $this->thing = $thing;
        return $this;
    }

    function get_info(){
        return $this->name . ' ' . $this->surname . "\n";
    }

    function __invoke(){
        if(is_subclass_of($this->thing, "WritingThing"))
        {
            $this->thing();
        } else echo "Nothing to use".PHP_EOL;
    }
    
}

$Johnny = new Person();

foreach ([new Pencil(),new Feather(), new Pen(), new Knife()] as $thing)
{
    $Johnny->take_something($thing());
}