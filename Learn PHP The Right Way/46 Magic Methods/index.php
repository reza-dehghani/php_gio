<?php

/*
Magic methods are exactly what they are called, they are "magic" in a way that you don't call these methods the way you call regular methods. Instead, these magic methods get triggered automatically after a certain action or event.
*/

#__construct()
include_once('class.php');

class A
{   
    private $data = array();

    function __construct()  {
        echo "Constructor A";
    }

    function __destruct()   {
        print "destruct". __CLASS__ ."\n";
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name){
        return $this->data[$name];
    }
}

class B extends A {
    function __construct()
    {
        parent::__construct();
        print "Construct B";
    }
}
/*
class OtherSubClass extends BaseClass {
    // inherits BaseClass's constructor
}
*/

// In BaseClass constructor
$obj = new A;

// In BaseClass constructor
// In SubClass constructor
$obj2 = new B();

#setter and getter

$obj->reza = "reza";

echo $obj->reza;

echo "\n__call\n";

$obj3 = new call;

$obj3->process(15, 'some description');