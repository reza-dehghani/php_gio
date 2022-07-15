<?php

declare(strict_types = 1);

// Your Code
$addr = "../transaction_files/sample_1.csv";
$date[] = NULL;
$check[] = NULL;
$description[] = NULL;
$amount[] = NULL;

$income[] = NULL;
$expense[] = NULL;

$f_pointer=fopen($addr,"r");
fgetcsv($f_pointer);
while(! feof($f_pointer)){
    $datas=fgetcsv($f_pointer);

    array_push($date, $datas[0]);
    if($datas[1])
        array_push($check, $datas[1]);
    array_push($description, $datas[2]);
    array_push($amount, $datas[3]);
}
