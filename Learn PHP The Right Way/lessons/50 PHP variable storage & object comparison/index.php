<?php
class b
{
    public function hello()
    {
        print("class constructed");
    }
}

class a
{
    public function hello()
    {
        print("class constructed");
    }
}
$obj = new a;
$obj2 = new a;

var_dump($obj != $obj2);