<?php

namespace App;

class Invoice
{
    public string $id;
    //if protected its can't irerate

    public function __construct(public float $amount)
    {
        $this->id = random_int(10000, 9999999);   
    }
}

?>