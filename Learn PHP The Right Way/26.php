<?php

// dates & time

$ct = time();

echo $ct + 5 *24 * 60*60; //for 5 days
echo "<br/>";
echo $ct - 60 *60 * 24;
echo "<br/>";

echo date('m/d/Y g:ia');

// /convert to time zip_open

date_default_timezone_set('Asia/Tehran');
echo date_default_timezone_get();
echo date('m/d/Y g:ia');

// set ALWAYS TO UTC

echo mktime(0,0,0,4,10,null);

// echo strtotime("second friday of january");

// var_dump((date_parse_from_format()))
