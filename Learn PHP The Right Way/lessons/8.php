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
