<?php
$obj = new class{
    public function __construct()
    {
        print "hello from anonymous";
    }
};
echo "\n";
var_dump(new class(1){});
echo "\nsfsd\n";

$obj2 = new class(1){};

get_class($obj);