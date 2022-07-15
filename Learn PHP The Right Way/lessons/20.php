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