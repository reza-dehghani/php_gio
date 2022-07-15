<?php

/* اولویت عملگرها
php.net-> language ops precedence
*/
// and or ops 
// اولویت کمتری نسبت به && || دارند

$x = true;
$y = false;

$z = ($x and $y);
var_dump($z);

// حتما از پرانتز برای خوانایی و عدم تعجب از نتایج ناخواسته ! استفاده کنید.
?>
