<?php

require_once __DIR__ . '/vendor/autoload.php';

define('STORAGE', __DIR__ . '/App/upload');
define('VIEWS_PATH', __DIR__. '/views');
define('INCLUDE_PATH', __DIR__. '/views/include');

$router = new App\Router();

$router
->register('/',[App\Controllers\HomeController::class, 'index'])
->register('/invoices',[App\Controllers\InvoiceController::class, 'index'])
->register('/invoices/create',[App\Controllers\InvoiceController::class, 'create'])
->register('/upload',[App\Controllers\HomeController::class, 'upload'])
->register('/invoices/store',[App\Controllers\InvoiceController::class, 'store']);

echo $router->resolve($_SERVER['REQUEST_URI']);
