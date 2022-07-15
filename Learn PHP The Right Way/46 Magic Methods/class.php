<?php 
class call {
    protected function process (float $amount, $description)
    {
        var_dump($amount, $description);
    }
    /*
    __call() is triggered when invoking inaccessible methods in an object context.

    __callStatic() is triggered when invoking inaccessible methods in a static context.

    */
    public function __call(string $name,array $arguments)
    {
        if(method_exists($this, $name))
        {
            call_user_func_array([$this, $name], $arguments);
        }
    }

    static function __callStatic(string $name, array $arguments)
    {
        var_dump('static', $name, $arguments);
    }
    }