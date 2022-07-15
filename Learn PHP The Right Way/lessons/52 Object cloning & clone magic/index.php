<?php
class b
{
    public function __construct()
    {
        print("class constructed");
    }
}

class a
{
    public function __construct()
    {
        print("class constructed");
    }

    public function __clone()
    {
        print("class a cloned");
    }
}

$obj = new a;

$obj1 = new $obj;

$obj2 = clone $obj1;