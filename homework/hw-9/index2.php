<?php
//----------------Второй уровень---------------------------------------------

//Функцией прочесть из файла все строки. 
//Другой функцией померять длину каждой строки. 
//Третьей функцией записать в совершенно другой файл только те строки, 
//которые длиннее средней длины по файлу.


$file_path = "/home/isakoval/Desktop/A-level/homework/hw-9/text.txt";
$new_file_path = "/home/isakoval/Desktop/A-level/homework/hw-9/new-text.txt";

// Функцией прочесть из файла все строки: 

function readAllStrings($path) {
    $array = file($path);
    return $array;   
};

// Другой функцией померять длину каждой строки: 

function getStrLen($string) {
    return strlen($string);
};

// Третьей функцией записать в совершенно другой файл только те строки, 
// которые длиннее средней длины по файлу

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
   
  