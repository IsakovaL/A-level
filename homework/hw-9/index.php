<?php

// ----------------Первый уровень ----------------
// Написать программу, которая открывает файл, считывает оттуда данные, 
// закрывает файл, создает другой файл, записывает туда данные через строку 
// (первую пишет, вторую нет, третью пишет, четвертую нет и т.д.), закрывает файл. 
// Имена файлов написать в комментариях в коде программы. Действия оформить в две функции: 
// одна для прочтения, другая для записи. Параметром обеих функций долен быть путь к файлу.

// $new = "";
// $handle = fopen("php://stdin","r");
//     $file_path = "/home/isakoval/Desktop/A-level/homework/hw-9/text.txt";
//     //$new_file_path = "/home/isakoval/Desktop/A-level/homework/hw-9/newtext.txt";

//     function file_read($file_path) {

//         $open_file = fopen($file_path, "r+");

//             while(!feof($open_file)) {

//                 $new_file = fgets($open_file);
//             }
//                 fclose($open_file);
//     };

//     function file_write($file_path,$new) {

//         $open_file = fopen($file_path, "r+");

//         $new_file = fgets($open_file);

               
                
//             for($i=0; $i < strlen($new_file); $i +=2) {

//                 $new = fopen($new, "a+");

//                 fwrite($open_file, $new_file);
                
               
//             }

//                 fclose($open_file);
//                 fclose($file_path);

//     };
//     file_read($file_path);
//     file_write($new);


//----------------Второй уровень---------------------------------------------

//Функцией прочесть из файла все строки. 
//Другой функцией померять длину каждой строки. 
//Третьей функцией записать в совершенно другой файл только те строки, 
//которые длиннее средней длины по файлу.
//--------------------------------------------------------------------------
//Функцией прочесть из файла все строки: 

$file_path = "/home/isakoval/Desktop/A-level/homework/hw-9/text.txt";
$new_file_path = "/home/isakoval/Desktop/A-level/homework/hw-9/new-text.txt";


 function readAllStrings($path) {
     $array = file($path);
     return $array;
    
 };
//Другой функцией померять длину каждой строки: 

 function getStrLen($string) {
     return strlen($string);
 };

 //Третьей функцией записать в совершенно другой файл только те строки, 
//которые длиннее средней длины по файлу

function writeToFile($new_file_path, $array) {

    $newFile = fopen($new_file_path, "w");

    $totalLen = 0;

    for($i=0; $i < count($array);$i++) {

        $currentRow = $array[$i];

        $currentRowLeng = getStrLen($currentRow);

        $totalLen = $totalLen + $currentRowLeng;

    };

    $averageStrLen = $totalLen / count($array);

    for($i=0;$i<count($array);$i++) {

       $currentRow = $array[$i];

       $currentRowLeng = getStrLen($currentRow);

            if($currentRowLeng > $averageStrLen) {

                fwrite($newFile, $currentRow);
            };

    };
};

    $fileArray = readAllStrings($file_path);

    writeToFile($new_file_path, $fileArray);
    
   
    
    
//-----------------Третий уровень---------------

// Пользуясь имеющимися наработками написать функцию, которая из исходных данных одной 
// строки получает результаты fizzbuzz. Другая функция должна прочесть из файла множество 
// строк вида "3 5 18", т.е. исходных данных для fizzbuzz, и записать в другой файл 
// полученные при помощи первой функции результаты по каждой строке.