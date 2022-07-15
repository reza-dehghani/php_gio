<?php

trait a
{
    public function __construct()
    {
        print("class a constructed");
    }
    public function hello()
    {
        echo "hello";
    }
}

class b
{
    use a,c;
    public function __construct()
    {
        print("class b constructed");
    }
}

trait c
{
    public function __construct()
    {
        print("class c constructed");
    }
    public function hello_c()
    {
        echo "hello c";
    }
}

// class a extends b,c  ERRoR

$obj = new b;
$obj->hello_c();
