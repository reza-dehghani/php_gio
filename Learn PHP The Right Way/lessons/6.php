<?php

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