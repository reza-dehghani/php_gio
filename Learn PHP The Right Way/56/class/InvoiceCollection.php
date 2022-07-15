<?php

namespace App;

class InvoiceCollection implements \iterator
{
    public function __construct(array $invoices)
    {
        
    }

    public function current()
    {
        echo __METHOD__ .   PHP_EOL;
        return current($this->invoices);
    }

    public function next()
    {
        echo __METHOD__ . PHP_EOL;
        return next($this->invoices);
    }

    public function key()
    {
        echo __METHOD__ . PHP_EOL;

        return key($this->invoices);
    }

    public function valid() : bool
    {
        return current($this->invoices) !== false;
    }

    public function rewind() : void
    {
        reset($this->invoices);
    }

}   
