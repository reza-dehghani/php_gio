<?php

use App\Exception\MissingBillingInfoException;

class InvoiceException extends \Exception
{

    public static function MissingBillingInfo(): static
    {
        return new static('Missing biling info');
    }

    public static function InvaildAmount()
    {
        return new static('error massage');
    }
}
