<?php
class c{
    private $name;

    protected function getName():string
    {
        return static::$name;
    }

    public function getName_static(){
        return new static();
    }
}