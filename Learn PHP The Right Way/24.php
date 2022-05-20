<!-- variable scopes -->
<?php 

function foo()
{
    global $x;
    $x = 10; //
    echo $GLOBALS['x']; //all g vars
    //codes hard to read and bugs

    //static vars locals that not destroyed

    function getvalue()
    {
        static $value = null;
        if($value == null)
        $value = someveryexpensive();

        return $value;
    }

    function someveryexpensive() {
        sleep(2);

        return 10;
    }
    echo getvalue();
}

foo(20);

//1- foo($x) 2-global var 3- or echo $x in function
