<?php
namespace App;

use App\Exception\MissingBillingInfoException;
use InvoiceException;

class Invoice
{
    public function __construct(public Customer $customer)
    {
    }

    public function process(float $amount): void
    {
        if($amount <= 0){
            throw new \Exception('invalid invoice amount');
            // throw InvoiceException::InvaildAmount(); 
        //more specific error : exception for user error class for PHP
        /*
        Invalidargumentexception*/
        if(empty($this -> customer->getbillinginfo()))
        {
            throw new MissingBillingInfoException();
            // throw InvoiceException::MissingBillingInfo();
            // if not find sutable exception-> base exception

        }
        }
        echo 'Processing $' . $amount   . 'invoice -';

        sleep(1);

        echo 'OK'   .PHP_EOL;
    }
}