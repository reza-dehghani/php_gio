<?php

//php 8

match ($x)
{
    //key-value pares
    1 > 2 => 'paid',
    2,3 => print '2',
    0 => print '3',
    default => 'unknown', 
};