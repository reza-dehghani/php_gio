<?php

echo "hello php 8";

class c{
    public static int $count = 0;

    public static function getCount(): int
    {
        return self::$count;
    }
}

var_dump(c::$count);

$obj = new c;
$obj->getCount();
