<?php

namespace App\Classes;

class invoice
{
    public function index(): string
    {
        return 'Invoice';
    }

    public function create(): string
    {
        return '<form method="post" action="/invoices/create"><label>Amount</label><input type="txt" name="amount"></form>';
    }

    public function store()
    {
        $amount= $_POST['amount'];

        var_dump($amount);
    }
}