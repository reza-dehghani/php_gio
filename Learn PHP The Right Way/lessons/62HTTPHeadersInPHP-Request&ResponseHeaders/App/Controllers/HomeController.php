<?php

namespace App\Controllers;

use App\View;

class HomeController
{
    public function index(): View
    {
        return View::make('index', ['foo' => 'bar']);
    }
    public function upload(): View
    {
        return View::make('upload');
    }
    public function download()
    {
        header('Content-Type: applicaion/pdf');
        header('Content-Disposition: attachment;filename="reza.png"');

        readfile(STORAGE . '/pdf.pdf');
    }
}