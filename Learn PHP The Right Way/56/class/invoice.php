<?php

declare(strict_types=1);

// namespace App;

class Invoice
{
    public $id;

    public function __construct($amount)
    {
        $this->id = random_int(10000, 9999999);   
    }
}

?>