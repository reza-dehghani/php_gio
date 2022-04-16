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
