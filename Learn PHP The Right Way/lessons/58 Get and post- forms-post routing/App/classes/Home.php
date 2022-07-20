<?php

namespace App\Classes;

class Home
{
    public function index(): string
    {
        // echo "<br>";
        // var_dump($_REQUEST);
        // echo "<br>";
        // var_dump($_GET);
        // echo "<br>";
        // var_dump($_POST);
        // echo "<br>";
        // return '<form method="post" action="/?foo=bar&amount=100"><label>Amount</label><input type="txt" name="amount"></form>';
        return 'Home';
    }
}