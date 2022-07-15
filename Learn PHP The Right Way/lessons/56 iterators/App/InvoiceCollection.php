<?php

namespace App;

use Traversable;

/*class InvoiceCollection implements \Iterator
{
    public function __construct(public array $invoices)
    {
        
    }

    public function current()
    {
        echo __METHOD__ .   PHP_EOL;
        return current($this->invoices);
    }

    public function next():void
    {
        echo __METHOD__ . PHP_EOL;
        next($this->invoices);
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
}*/

# or

/*class InvoiceCollection implements \Iterator
{
    private int $key; //pointer property
    public function __construct(public array $invoices)
    {
        
    }

    public function current()
    {
        echo __METHOD__ .   PHP_EOL;
        return $this->invoices[$this->key];
    }

    public function next():void
    {
        echo __METHOD__ . PHP_EOL;
        ++$this->key;
    }

    public function key()
    {
        echo __METHOD__ . PHP_EOL;
        return key($this->invoices);
    }

    public function valid() : bool
    {
        return isset($this->invoices[$this->key]);
    }

    public function rewind() : void
    {
        echo __METHOD__ . PHP_EOL;

        $this->key = 0;       
    }
}*/

#for single arrays

class InvoiceCollection implements \IteratorAggregate
{
    private int $key; //pointer property
    
    public function __construct(public array $invoices)
    {
        
    }

    public function getIterator(): Traversable
    {
        return new \ArrayIterator($this->invoices);
    }

}