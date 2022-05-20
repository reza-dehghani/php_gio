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