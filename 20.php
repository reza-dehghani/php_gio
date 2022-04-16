<?php
/* return / declare . goto */

// stop execution of script

return;

// diclares: ticks, encodeing , strict_typres

function ontick()
{
    echo 'tick';
}
register_tick_function('ontick');

declare (tick = 3);
$i = 0;
$len = 10;

declare (strict_types=1);

function sum(int $x , int $y)
{
    return $x+$y;
}

echo sum(5, 10);