<?php

// namespace App;

class Invoice
{
    public $id;
    //if protected its can't irerate

    public function __construct($amount)
    {
        $this->id = random_int(10000, 9999999);   
    }
}

?>