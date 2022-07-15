<?php

namespace App;

class Customer
{
    public function __construct(private array $billinginfo = [])
    {
        
    }

    public function getbillinginfo(): array
    {
        return $this->billinginfo;
    }
}