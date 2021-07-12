<?php

AInfo
- title
- genres
- length
- year
- directors
- actors
- IMDBrating

AInfo -> Movie
- partOfFranchise

Dark Knight
- фантастика-комикс-экранизация
- 150
- 2008
- Нолан
- Хит Леджер,Бейл
- Бетмен - Нолана
- 9.6

AInfo -> Serie
- inviteStars
- season

Movie -> Series
- numberOfSeries
- numberOfSesons

Во все тяжкие
- криминал-триллер-драма
- 40
- 2007
- разные()
- Пол, Крэнгстон, Эспозито
- Во все тяжкие - вселенная
- 9.5
- 5*12
- 5

Users
- firstName
- lastName
- login
- password

PersonalPage
- recomendations
- selectedPoster
- favorites
- seen
- inProgress

abstract class Info {
    $title;
    $genres;
    $length;
    $year;
    $directors;
    $actors;
    $IMDBrating;
}
class Movie extends Info {
    private $partOfFranchise;
}

class Serie extends Info {
    private $inviteStars;
    private $season;
}
class Series extends Movie {

}