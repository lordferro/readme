<?php

require_once __DIR__ .'/../vendor/autoload.php';

use App\PaymentGateway\Paddle\Transaction;

use App\Enums\Status;

$transaction = new Transaction(50);

echo '<pre>';  print_r($transaction);  echo '</pre>';
echo $transaction->getCount();


$title = 'My site';

$header = <<<HEADER
<header>
    <h1>$title</h1>
</header>
HEADER;

echo $header;