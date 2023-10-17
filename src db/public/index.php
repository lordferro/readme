<?php
require_once __DIR__ .'/../vendor/autoload.php';
use App\Exceptions\RouteNotFoundException;
use App\View;

session_start();

use App\Router;

define('STORAGE_PATH', __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'storage');

define('VIEW_PATH', __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'views');
try {
    $router = new Router();


    $router
    ->get('/', [App\Controllers\HomeController::class, 'index'])
    ->get('/download', [App\Controllers\HomeController::class, 'download'])
    ->post('/upload', [App\Controllers\HomeController::class, 'upload'])
    ->get('/invoices', [App\Controllers\InvoiceController::class, 'index'])
    ->get('/invoices/create', [App\Controllers\InvoiceController::class, 'create'])
    ->post('/invoices/create', [App\Controllers\InvoiceController::class, 'store']);

    echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));
} catch(RouteNotFoundException $e) {
    // header('HTTP/1.1 404 Not Found');
    http_response_code(404);

    echo View::make('error/404');
}
