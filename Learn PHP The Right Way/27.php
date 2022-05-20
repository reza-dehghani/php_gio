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
