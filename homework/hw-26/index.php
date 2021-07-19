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



abstract class Info {
    public $title;
    public $genres;
    public $length;
    public $year;
    public $directors;
    public $actors;
    public$IMDBrating;
}

class Movie extends Info {
    private $partOfFranchise;

    private function addToFavorites ($user) {
        array_push($user->userPage->favorites, $this);
        
    }

    public function  __call($method, $parameters) {
        if(method_exists($this, $method))
		{
		  return call_user_func_array(array($this, $method), $parameters);
		}
    }

    private function addToSeen($user) {
        array_push($user->userPage->seen, $this);
    }

    public function __construct($title, $genres, $length, $year, $directors, $actors, $partOfFranchise, $IMDBrating) {
        $this->title=$title;
        $this->genres=$genres;
        $this->length=$length;
        $this->year=$year;
        $this->directors=$directors;
        $this->actors=$actors;
        $this->IMDBrating=$IMDBrating;
        $this->partOfFranchise=$partOfFranchise;
    }
}

$darkKnight = new Movie('Dark Knight', 'фантастика-комикс-экранизация',150, 2008, 'Нолан', 'Хит Леджер,Бейл', 'Бетмен - Нолана', 9.6 );
$Film2 = new Movie('Film 2', 'фантастика', 120, 2021, 'director 1', 'actor 1', 'Franchise 1', 5.4 );
$Film3 = new Movie('Film 3', 'фантастика', 130, 2018, 'director 2', 'actor 2', 'Franchise 2', 7.6 );


class Serie extends Info {
    private $inviteStars;
    private $season;

    public function __construct() {
        
    }
}
class Series extends Movie {
    public $numberOfSeries;
    public $numberOfSesons;

    public function __construct($title, $genres, $length, $year, $directors, $actors, $partOfFranchise, $IMDBrating,$numberOfSeries, $numberOfSesons) {
        $this->title=$title;
        $this->genres=$genres;
        $this->length=$length;
        $this->year=$year;
        $this->directors=$directors;
        $this->actors=$actors;
        $this->partOfFranchise=$partOfFranchise;
        $this->IMDBrating=$IMDBrating;
        $this->numberOfSeries=$numberOfSeries;
        $this->numberOfSesons=$numberOfSesons;
    }

}

$voVseTiajkie = new Movie('Во все тяжкие', 'криминал-триллер-драма', 40, 2007, 'разные', 'Пол, Крэнгстон, Эспозито', 9.5, 5*12, 5);
$shameless = new Movie('Shameless', 'genre', 55, 2006, 'director', 'actors', 7.4, 8*11, 10);


class PersonalPage {
    public $recomendations=[];
    public $selectedPoster=[];
    public $favorites=[];
    public $seen=[];
    public $inProgress=[];

   
}

class Users {
    public $firstName;
    public $lastName;
    public $login;
    public $password;
    private $userPage;

    public function __get($property)
    {
      if (property_exists($this, $property)) {
        return $this->$property;
      }
    }

    public function __construct($firstName,$lastName,$login, $password) {
        $this->firstName=$firstName;
        $this->lastName=$lastName;
        $this->login=$login;
        $this->password=$password;
        $this->userPage = new PersonalPage();

    }
}

$user1 = new Users('Tom', 'Smith', 'qwerty', '1234567890');
$user2 = new Users('Tom2', 'Smith2', 'qwerty', '1234567890');

$darkKnight->addToFavorites($user1);
$Film2->addToSeen($user1);

$darkKnight->addToSeen($user2);
$Film3->addToFavorites($user2);

function printInfo($user) {
    echo "I'm user " . $user->firstName;
    echo " my favorite movies are: ";

    foreach($user->userPage->favorites as $movie) {
        echo $movie->title;
    }

    echo " Films I've seen are: ";

    foreach($user->userPage->seen as $movie) {
        echo $movie->title;
    }
}

printInfo($user1);
printInfo($user2);
