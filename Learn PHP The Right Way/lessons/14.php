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