<?php

// Написать программу, которая открывает файл, считывает оттуда данные, 
// закрывает файл, создает другой файл, записывает туда данные через строку 
// (первую пишет, вторую нет, третью пишет, четвертую нет и т.д.), закрывает файл. 
// Имена файлов написать в комментариях в коде программы. Действия оформить в две функции: 
// одна для прочтения, другая для записи. Параметром обеих функций долен быть путь к файлу.

function fileread() {
    
    $file_array = file("/home/isakoval/Desktop/A-level/hw-6/hw-9/text.txt"); //Считывание файла в массив $file_array
 
    $newfilepass = "/home/isakoval/Desktop/A-level/hw-6/hw-9/newtext.txt";

    $newfile = ""; //создаем файл

        if (!file_exists($newfilepass)) {  //if no such file 
                
            $newfile = fopen($newfilepass, "w"); //создаем файл

               // $newfileArr = fopen($newfilepass, "a+");// Открываем файл в режиме записи
            };
         
        for($i = 0; $i < count($file_array); $i+=2) {

            print_r("hello");

            $string = $file_array[$i];

            $newarray = fwrite($newfile, $string);// Запись в файл
        };
        
    // fclose($newfile);
};

fileread("text.txt");

//Функцией прочесть из файла все строки. 
//Другой функцией померять длину каждой строки. 
//Третьей функцией записать в совершенно другой файл только те строки, которые длиннее средней длины по файлу.



// function readAllStrings() {
    
//         $file = fopen('/home/isakoval/Desktop/A-level/hw-6/hw-9/newtext.txt', 'r+');
        
//         $newArr = file('/home/isakoval/Desktop/A-level/hw-6/hw-9/newtext.txt');

//         while(!feof($file)) {
//             $a = fgets($file);
//         };
//     fclose($file);

//     }
//   readAllStrings();