<?php

// Написать программу, которая открывает файл, считывает оттуда данные, 
// закрывает файл, создает другой файл, записывает туда данные через строку 
// (первую пишет, вторую нет, третью пишет, четвертую нет и т.д.), закрывает файл. 
// Имена файлов написать в комментариях в коде программы. Действия оформить в две функции: 
// одна для прочтения, другая для записи. Параметром обеих функций долен быть путь к файлу.

function fileread() {
    
    $file_array = file("/home/isakoval/Desktop/A-level/hw-6/hw-9/text.txt"); //Считывание файла в массив $file_array
 
        if (!file_exists("/home/isakoval/Desktop/A-level/hw-6/hw-9/newtext.txt")) {  //if no such file 
                
                $createfile = fopen($file_array, "w"); //создаем файл

                $newfile = fopen("/home/isakoval/Desktop/A-level/hw-6/hw-9/newtext.txt", "a+");// Открываем файл в режиме записи
            }
        
        for($i = 0; $i == $file_array; $i +=2) {

            $newfile = fwrite($file_array, $i);// Запись в файл
            print("hello");
        };
        

    // fclose($newfile);
};

fileread("text.txt");
