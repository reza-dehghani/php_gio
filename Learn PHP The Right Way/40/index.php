<?php

include_once('class.php');

$obj = new T;

echo PHP_EOL;
ECHO T::STATUS_PENDING;

echo PHP_EOL;
echo T::class;

echo "<br>";
// better way

echo T::ALL_STATUSES['paid'];

echo "<br>";

echo T::ALL_STATUSES['pending'];