<?php

use App\View;

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

define('STORAGE', __DIR__ . '/App/upload');
define('VIEWS_PATH', __DIR__. '/views');
define('INCLUDE_PATH', __DIR__. '/views/include');

try
{
$router = new App\Router();

$router
->get('/',[App\Controllers\HomeController::class, 'index'])
->get('/invoices',[App\Controllers\InvoiceController::class, 'index'])
->get('/invoices/create',[App\Controllers\InvoiceController::class, 'create'])
->post('/upload',[App\Controllers\HomeController::class, 'upload'])
->get('/download',[App\Controllers\HomeController::class, 'download'])
->get('/invoices/store',[App\Controllers\InvoiceController::class, 'store']);

echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));


}   catch(\App\Exception\ViewNotFoundException $e){
    // header('HTTP/1.1 404nOTfOUND'); //Because before any output annoyed
    http_response_code(404);

    echo View::make('error/404');
}