FILENAME:.htaccess
<IfModule mod_rewrite.c>

RewriteEngine On

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f

RewriteRule ^ index.php [L]
</IfModule>

FILENAME:3.php
<?php 

?> // اگه کل صفحه پی اچ پی هست نیازی نیست


print "sth" //return
print('HW');
echo //fast than print

$vars = 'Goo';
$y = &$x; //reference by value

<?= 'HW' ?> // = <?php echo "HW" ?>
// Comment1 #Comment2 /* M Comment */
FILENAME:4.php
<?php
//constants: some static dates

define ('NAME' , "Reza");

echo NAME;

echo defined('NAME'); //BOLEAN (1 OR 0)

if(true){
	// const FOO = "bar";
		// define('NAME' , 'Reza'); 
}

$paid = 'PAID';

define("STATUS_".$paid, 4); 
echo STATUS_PAID;

//PRINT PHP version

echo PHP_VERSION;

// MAGIC constant
echo __LINE__;
echo __FILE__;

//variable variable

$foo = 'bar';

$$foo = 'baz';

echo $foo, $bar; // or echo "$foo, ${$foo}";

?>
FILENAME:5.php
<?php

//enable strict_types !
declare(strict_types=1);
//مجبور میکنه که نوعش حتما درس باشه


$comlete = true; // return 1
$comlete = false; // return nothing!

var_dump($comlete); // return datatpe with value


#print_r(); //print array

/* 
types: scalar(int,...) , compound(array,object,callable, iterable);  special
*/
function f(int $x){ //gaurantee that its integer
 }



//type casting

$x = (int) 5.5;

?>

FILENAME:6.php
﻿<?php

// BASE 10
$x = 10;

//base hexdec

# $x = 0x ... ;

//base bin
#0b

$x = PHP_INT_MAX+1;
//cast this to int
$x = (int) PHP_INT_MAX+1;

//تبدیل به integer
$x = (int) 1 ; // (integer 1)
// همه رشته ها و عبارت نال تبدیل به صفر میشن



var_dump($x);

// مشخص کردن نوع متغیر
var_dump(is_int($x));

$x = (int)2-000-000; // :) out: int:2000000 string: 2 
// پی اج پی زیرخط رو در نظر نمیگیره!
echo $x;
?>
FILENAME:7.php
<?php

/*FLOATS*/

//neg float
$X = 13.5e-3;

//+ 
$X = 13.5e3; // or 13_000.5e3

echo PHP_FLOAT_MAX; // OR min
// نمایش حداکثر و حداقل مقدار

floor ((0.1 + 0.7) * 10);
// گرد کردن اعداد به پایین
// متضادش ceil

ceil((0.1+0.2)*10); // 4! : 3.00000000000004 = گردش میکنه

//نباید مستقیم این اعداد رو با هم مقایسه کنید

//NAN = تعریف نشده
#is_nan ?
// INF = بینهایت
#is_infinite ?
#is_finite ?
 
echo PHP_FLOAT_MAX *2;

//cast to float
var_dump ((float) 'flsdkjf'); // 0 مثل اینتیجر
?>
FILENAME:8.php
<?php

//strings

$fname = 'Reza'; // cannat use varuables

$lname = "$fname Dehghani"; // CAN!
//or {$fname} ${fname}

$name = $fname . ' ' . $lname;

echo $name[5]; // -2 از آخر

//HEREdoc
$text = <<<TEXT
l1
L2
L3
TEXT;

ECHO nl2br($text);

// <div>


//Nowdoc

FILENAME:9.php
<?php 

$x = null;
echo $x;
// echo cast everything to string

//when a variable not descussed it going null

// or unset($x);

var_dump((int) $x); // int,string, array = 0 ; bool == false 

?>
FILENAME:11.php
<?php

//Arrays:list of values

$prog_langs = ['PHP', 'JAVA', 'PTHPN'];

//IN ARRAYS WE haven't -1 values

var_dump(isset($prog_langs[3]));

//print contents also ...
print_r($prog_langs);

echo count($prog_langs);

//eho with <pre> tag

//funcs

array_push($prog_langs, 'value');

//value-key

//for custom keys

$prog_langs = [
    'php' => 'value',
    'py' => 'v2'
];

echo $prog_langs['php'];

//مشترک key : آخرین مقدار محاسبه میشه
$array = [1 => 'b', '1' => 'c'];

$array = [1 => 'b', 50 => 'c', 'd'];

//remove element

echo array_shift($array); // reindex elements;
var_dump($array);


unset($array[50], $array[1]); // every element as args and with no reindex
var_dump($array);

$array[] = 1; //push in empty array, enjoy export!!!

array_key_exists('a', $array); // key be here?

var_dump
(isset($array['key'])); // is null?



FILENAME:12.php
<?php

//Expression : condition, loop, evaluate with variables, ... 
$x = 5;

$y = $x;//exprssion $x;


FILENAME:13.php
<?php

/*operators */

//Arithmatics (+ - * / % **)
$x = -'10'; // cast to int!
var_dump($x);
//تقسیم بر 10 = خطا!!!
//% = cast to int
// mod operation of floats var_dump(fmod($x, $y);

//Assignments (= += , ... ,**=)

//strings (. .=)
// . = concat

//Comparisons
$y = 65;
var_dump($x != $y); // or <>


FILENAME:14.php
<?php
//operators 2

//error ops
$x = @file('address'); //don't use this

// ++, --
$x = 'acbv'; //-- affect in strings

echo --$x;

//bitwise ops (& | ^ ~ << >>)
$x = 6; $y =3;

//110
//011
// ---
// 
//>> every byte div/mul by 2

//array ops
$x = ['a', 'b', 'c'];
$y = ['a', 'e'];

// + == === != (<>) !==

?>
FILENAME:15.php
<?php

/* اولویت عملگرها
php.net-> language ops precedence
*/
// and or ops 
// اولویت کمتری نسبت به && || دارند

$x = true;
$y = false;

$z = ($x and $y);
var_dump($z);

// حتما از پرانتز برای خوانایی و عدم تعجب از نتایج ناخواسته ! استفاده کنید.
?>

FILENAME:16.php
<?php

// control structures

//always use braces {} -> more readabulity

//else if or if :
    $x = 5;
    if ($x == 25) :
        echo "yes";
    elseif ($x >0) : echo "no"; 
    endif
    // no else if
    // an alter for if else else if(elseif) statments
    ?>
FILENAME:17.php
<?php
//مثل ج قبلی
// } -> : 
// } -> end while
$i =16;
while ($i<100)
{
    while ($i >= 15)
    {
        echo $i++;
        break 2;
    }
}

for($i = 0; print $i, $i < 15; $i++)
{
    // execute one time : $i = 0; print $i

    // echo $i;
}

$pl = ['php', 'jva'];

foreach ($pl as $key => $l)
{
    echo $key . $l;
}
//this not delete after for -> issue on code
echo $l;
//solved
unset ($l);

//echo array on a multi var
// implode(
    //or

// json_encode()

?>
FILENAME:18.php
<?php
$pay ='rejected';

switch ($pay)
{
    case 'rejected':
        echo ":)";
        break;
    case 'not paid':
        echo "sth";
        break;
}

//switch faster than if else in many palces
FILENAME:19.php
<?php

//php 8
$x =2;
match ($x)
{
    //key-value pares
    1 > 2 => 'paid',
    2,3 => print '2',
    0 => print '3',
    default => 'unknown', 
};
FILENAME:20.php
<?php

declare (strict_types=1);

/* return / declare . goto */

// stop execution of script

// return;

// diclares: ticks, encoding , strict_types

function ontick()
{
    echo 'tick';
}
register_tick_function('ontick');

declare (tick = 3);
$i = 0;
$len = 10;

function sum(int $x , int $y)
{
    return $x+$y;
}

echo sum(5, 10);
FILENAME:21.php
<?php

require 'file.php'; //stop script if removed 

ob_start();

include 'file.php';

$nav = ob_get_clean();

// $nav = str_replace() change a word in string and so on!

echo $nav;
FILENAME:22.php
/* Funcs */

<?php

//can declare funcs in every of code first middle end else exceptions

// don't use functions-in-functions and exceptions: hard to read
// declare(strict_types= 1);
function foo(): int{ // or void! // declare type of return
    return 1;
}

// allow to nullabe varible ?int 
//or return only int|array
//mixed (PHP8)

function sum (...$nums): int|float
{
    $sum = 0;

    return array($nums);
}
$array = [50,100];
echo sum ($array);

//unpack arrays opearator ...

echo foo(y: $y, x: $x); // change order of funcs

setcookie(name:'foo', value:'bar', httponly:true); // so readablity so easy

$arr = ['y' => '2' , 'x' => 1];

echo foo(...$arr);

FILENAME:24.php
<!-- variable scopes -->
<?php 

function foo()
{
    global $x;
    $x = 10; //
    echo $GLOBALS['x']; //all g vars
    //codes hard to read and bugs

    //static vars locals that not destroyed

    function getvalue()
    {
        static $value = null;
        if($value == null)
        $value = someveryexpensive();

        return $value;
    }

    function someveryexpensive() {
        sleep(2);

        return 10;
    }
    echo getvalue();
}

foo(20);

//1- foo($x) 2-global var 3- or echo $x in function

FILENAME:25.php
<?php

// variables, anonymous, arrow functions

function sum(int|float .. $nums): int|float{
    return array_sum ($nums);
}

$x = 'x';

//functions has no names = anonymous

function (){

}; // ; necessory

$sum = function () use ($x) : int|float{
    

};
echo sum();
$array = [1,2,3,4];

function foo($element){
    return $element*2;
}
$array2 = array_map('foo', $array);

print_r($array);

print_r($array2);

$array = [1,2,3,4];

$array2 = array_map(fn($number) => $number * $number, $array);

print_r($array2);

// arrow functions: can use parents vars
//its copy vars 

//multiple arrow funcs can't 
FILENAME:26.php
<?php

// dates & time

$ct = time();

echo $ct + 5 *24 * 60*60; //for 5 days
echo "<br/>";
echo $ct - 60 *60 * 24;
echo "<br/>";

echo date('m/d/Y g:ia');

// /convert to time zip_open

date_default_timezone_set('Asia/Tehran');
echo date_default_timezone_get();
echo date('m/d/Y g:ia');

// set ALWAYS TO UTC

echo mktime(0,0,0,4,10,null);

// echo strtotime("second friday of january");

// var_dump((date_parse_from_format()))

FILENAME:27.php
<?php

// arrays functions

$items = ['a' => 1, 'b' => 2];
// array_chunk();

// prettyPrint

$array = [1,2,3,4];

$even = array_filter($array, fn($number, $key) => $number % 2 == 
);



prettyPrintArray($even);

$array2 = ['a' =>5 , 'b' =>6];

// $keys = array_keys();

$array = array_map(fn($number) => $number *3 , $array);

//more than a array to array_map keys don't printed

// array_merge();

// array_reduce: محاسبه مقادیر یک آرایه در یک خط!

array_search('b', $array);
// search key senetive , 0 for not found 

// مقایسه تقاوت دو آرایه
array_def();

asort();

ksort();

//sort array with keys

// usort(fn($arrat)

//list
list[$a,$b] = $array;

FILENAME:28.php
<?php

/* php.ini and configuration */

// [ignore] and ; 
//changeable important
// error_reporting, error_log, desplay_errors

//current set 
var_dump(ini_get('error_reporting'));
var_dump(E_ALL);

// ini_set('display_error,0); // no error')


// memory limit, file upload, upload max size, time zone, include path, 
FILENAME:29.php
<?php

//Error handling
//E_all show all error
error_reporting(E_ALL & E_WARNING);

trigger_error('ex error, E_user_eror)');

function errorHandler(int $size){}
error_log("You messed up!");
FILENAME:30.php
<?php

/* APACHE CONFIG */

// SERVERNAME 

//vIRTUAL hOSTS: more site in a machine: directory.local

//in httpd.conf virtual hosts section

// when you don't permisson to config af apachee and it's low performance of site


FILENAME:31.php
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