<?php

// working with filesystem

$dir = scandir((__DIR__));

echo var_dump($dir);
var_dump (is_dir($dir));

mkdir('temp/var.php');
    // mkdir('foo/var', recursive: true);


if (file_exists('30.php'))
    echo "bla bla";

echo filesize("30.php");

// clearstatcache("31.php");
// file_put_contents("31.php","some thing append to this file") //first clear cash



// $file = fopen('foo.txt', 'r');
//open= resourse

// @fopen : کنترل خطا

$file = @fopen('30.php', 'r');

var_dump($file);

// better contril error

//read line : fgets();

// fclose($file);

// fgetcsv() 

$content= file_get_contents('5.php', FILE_APPEND);
// $content= file_get_contents('foo.txt', offset="3", fileAppend);

echo $content;

// copy() copy file
// rename () for move
copy("31.php", "31_copy.php");
