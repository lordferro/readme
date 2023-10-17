<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Config;
use App\Exceptions\RouteNotFoundException;
use App\View;

session_start();

use App\Router;

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

define('STORAGE_PATH', __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'storage');

define('VIEW_PATH', __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'views');

$router = new Router();


$router
->get('/', [App\Controllers\HomeController::class, 'index'])
->get('/download', [App\Controllers\HomeController::class, 'download'])
->post('/upload', [App\Controllers\HomeController::class, 'upload'])
->get('/invoices', [App\Controllers\InvoiceController::class, 'index'])
->get('/invoices/create', [App\Controllers\InvoiceController::class, 'create'])
->post('/invoices/create', [App\Controllers\InvoiceController::class, 'store']);

(new App\App(
    $router,
    ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']],
   new Config($_ENV)
))->run();
