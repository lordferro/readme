<?php

namespace App\PaymentGateway\Paddle;

class Transaction
{
    protected $count;
    public function __construct(int $count = 0)
    {
        $this->count = $count;
        // self::$count ++;
    }

    public function getCount(): int
    {
        return $this->count;
    }

}