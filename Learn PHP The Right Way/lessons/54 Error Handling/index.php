<?php

require_once __DIR__  .'./vendor/autoload.php';

use App\Customer;
use App\Invoice;

$invoice = new Invoice(new Customer());

try
{
$invoice->process(25);

}   catch(\App\Exception\MissingBillingInfoException| \InvalidArgumentException $e)
{
    // or catch(\Exceprion $e)
    $e->getMessage();
}   finally {
    echo    'finally block';
}
//  finally block always call

set_exception_handler(function(\Throwable $e){
    var_dump($e->getMessage());
});

/**
 * Error hierarchy->php.net
 */