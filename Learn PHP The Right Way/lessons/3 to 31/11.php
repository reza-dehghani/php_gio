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


