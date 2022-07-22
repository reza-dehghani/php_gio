<?php

namespace App\Controllers;

use App\View;
use PDO;

class HomeController
{
    public function index(): View
    {
        // phpinfo();
        
        try
        {
        $db = new PDO('mysql:host=localhost;dbname=my_db', 'root', 'r');
        var_dump($db);
        }
        catch (\PDOException $e){
            throw new \PDOException($e->getMessage(), $e->getCode());
        }

        return View::make('index', ['foo' => 'bar']);
    }
}