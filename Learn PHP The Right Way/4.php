<?php
//constants: some static dates

define ('NAME' , "Reza");

echo NAME;

echo defined('NAME'); //BOLEAN (1 OR 0)

if(true){
	// const FOO = "bar";
		// define('NAME' , 'Reza'); 
}

$paid = 'PAID';

define("STATUS_".$paid, 4); 
echo STATUS_PAID;

//PRINT PHP version

echo PHP_VERSION;

// MAGIC constant
echo __LINE__;
echo __FILE__;

//variable variable

$foo = 'bar';

$$foo = 'baz';

echo $foo, $bar; // or echo "$foo, ${$foo}";

?>