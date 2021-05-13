<?php

// function beautyName($name){
//     return ucfirst(strtolower($name));
// }

// echo "Dratuti!";
// // 1. Создайте массив для хранения городов. 
// // Вводите города из консоли в цикле, добавляйте в массив. 
// // Когда введут 1, выводите весь массив, на этом программа завершается.

// $cities = [];

// $input = fopen("php://stdin","r");//potok vvoda

// while(true) {

//     $cityName = fgets($input);// what we get from console we write to variable $cityName

//     if((int)$cityName === 1) break;

//     else {
//         $a = explode(" ", $cityName);
//         $a = array_map("beautyName", $a);
//         $cities[] = implode(" ", $a);
//     }

// }

// print_r($cities);

// 2. Улучшайте программу с городами. Теперь вне зависимости от того, 
// какими символами написан город, все буквы в его названии должны быть 
// строчными, кроме первых букв каждого слова названия. 
// Пример: вводите san franCIsco, выводите San Francisco.

// 3. Напишите функцию для подсчета среднего числа в массиве. 
// Вызывайте ее с массивом целых чисел, возвращайте среднее. 
// Считать руками, без специальных математических функций.

// $array = [1,2,3,4,5,6,7];

// function countNum($array) {

//     $sum = array_sum($array);
//     $coutElements = count($array);
//     $avNum = $sum / $coutElements;
//     echo($avNum);
// }
// countNum($array);

// 4. Напишите программу, которая выводит сама себя в консоль. 
// (смотреть на массив $argv и работу с файлами, программа ведь хранится в файле)

// $textFile = file($argv[0]);
// print_r($textFile);

// 5. Создайте двумерный список студентов, ключ - фамилия, значение - масив оценок. 
// Выведите красиво.

$studentsList = [
"Ivanov" => [4,5,2,4,4],
"Petrov" => [3,5,4,2],
"Vasilyev" => [5,5,4,5,5,5,4]
];

foreach($studentsList as $key => $marks) { //$key - Ivanov -/-/-/
    echo $key." marks are: ".implode(" ",$marks)."\n"; //implode sobiraet massiv v stroku
}
