<?php

namespace App\Classes;

class Home
{
    public function index(): string
    {
        $_SESSION['count'] = ($_SESSION['count'] ?? 0) + 1;
        setcookie('username', 'reza', time() + 3);
        return 'Home';
    }
}