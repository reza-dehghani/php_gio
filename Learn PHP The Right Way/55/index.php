<?php

require_once __DIR__ . '/../vendor/autoload.php';

$datetime = new DateTime('tomorrow');
$datetime = new DateTime('05/12/2003 3:30PM');
//before time zone never set time

$datetime->setTimezone(new DateTimeZone('Asia/Tehran'));
$datetime->format('m/Y/d g:i: A');


var_dump($datetime);

//S2
$date = '12/06/2000 3:30AM';

$datetime = DateTime::createFromFormat('d/m/Y g:iA', $date);

// $datetime = DateTime::createFromFormat('d/m/Y', $date)->setTime(0,0);

date_timezone_get($datetime);
var_dump($datetime);

$datetime2= new DateTime('12/01/2002 05:05 AM');

var_dump($datetime < $datetime2);

var_dump($datetime->diff($datetime2)->format('%d days'));
var_dump($datetime->diff($datetime2)->format('%a'));
var_dump($datetime->diff($datetime2)->format('%R%a'));

$interval = new DateInterval('P3M2D');

$datetime->add($interval);

$from = new DateTimeImmutable();
$to = ($from)->add(new DateInterval('P1M'));

$to->add(new DateInterval('P1M'));

var_dump($from == $to);

echo $from->format('m/d/Y') . ' - ' . $to->format('m/d/Y');

$period = new DatePeriod((new DateTime('02/25/2021')), new DateInterval('P1D'),3 ,DatePeriod::EXCLUDE_START_DATE);

foreach($period as $date)
{
    echo $date->format('m/d/Y') . PHP_EOL;
}

/**
 * Carbon Library
 */