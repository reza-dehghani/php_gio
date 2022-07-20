<?php

namespace App\Controllers;

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
}