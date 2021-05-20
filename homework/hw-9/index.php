<?php

// ----------------Первый уровень ----------------
// Написать программу, которая открывает файл, считывает оттуда данные, 
// закрывает файл, создает другой файл, записывает туда данные через строку 
// (первую пишет, вторую нет, третью пишет, четвертую нет и т.д.), закрывает файл. 
// Имена файлов написать в комментариях в коде программы. Действия оформить в две функции: 
// одна для прочтения, другая для записи. Параметром обеих функций долен быть путь к файлу.

    $file_path = "/home/isakoval/Desktop/A-level/homework/hw-9/text.txt";
    $new_file_path = "/home/isakoval/Desktop/A-level/homework/hw-9/newtext.txt";

    function file_read($path) {

        $array = file($path);

        return $array; 
    };
   

    function file_write($path, $array) {

        $newFile = fopen($path, "w");      

            for($i=0; $i < count($array); $i +=2) {

            $string = $array[$i];
                
            fwrite($newFile, $string); 

            }

    };

$fileArray = file_read($file_path);

file_write($new_file_path, $fileArray);
