<?php

declare(strict_types=1);

namespace App\Controllers;

use App\App;
use App\Models\SignUp;
use App\Models\Invoice;
use App\Models\User;
use App\View;
use PDO;

class HomeController
{
    public function index(): View
    {

        $email = 'john8@dow.com';
        $name = 'John3 Dow';
        $amount = 450;

        $userModel = new User();
        $invoiceModel = new Invoice();

        $invoiceId =  (new SignUp($userModel, $invoiceModel))->register([
              'email' => $email,
        'name' => $name,
        ], ['amount' => $amount]);


        return View::make('index', ['invoice' => $invoiceModel->find($invoiceId)]);
    }
}
