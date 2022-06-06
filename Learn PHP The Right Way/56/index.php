 <?php

//  require_once __DIR__ . '/../vendor/autoload.php';
 require_once './class/invoice.php';

 foreach(new Invoice(25) as $key => $value)
 {
     echo $key  . '='   . $value    .   PHP_EOL;
 }

 ?>