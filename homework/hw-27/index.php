<?php

class dataBase {

    private static $obj;

    private function __clone(){}
    private function __wakeup(){}

    $host = 'localhost';
    $dbname = 'books';
    $username = 'isakoval';
    $password = '';

    private function __construct() {
        $this->con = new PDO("mysql:host=$host;dbname=$dbname", $username,$password);
    }

    static public function getConnect() {
        if(empty(self::$obj))
        self::$instance = new self();
        return self::$obj->con;
    }
}

$con = dataBase::getConnect();

$sql = "SELECT name, title, genre FROM authors INNER JOIN books ON (authors.author_id = books.genre_id) INNER JOIN genres ON (books.genre_id =
genres.genre_id)";

$result = $con->query($sql);

$articles = $result->fetchAll(PDO::FETCH_ASSOC);

print_r($articles);