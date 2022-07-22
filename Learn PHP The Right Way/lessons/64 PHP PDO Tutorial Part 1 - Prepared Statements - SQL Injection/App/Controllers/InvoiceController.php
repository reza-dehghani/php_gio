<?php

namespace App\Controllers;

use App\Invoice;
use App\InvoiceCollection;
use App\View;

class invoiceController
{
    public function index(): View
    {
        return View::make('invoices/index');
    }

    public function create(): View
    {
        return View::make('invoices/create');
    }
    public function store()
    {
        $amount= $_GET['amount'];
        $invoice = new invoiceController($amount);

        $invoice->store($amount);
        var_dump($amount);
    }
}