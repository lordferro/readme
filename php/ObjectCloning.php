<?php

class Invoice
{
    public string $id;

    public function __construct()
    {
        $this->id = 'invoice_' . time() + mt_rand(1, 10000);
    }
    // now when we clone the object, magic method will create a uniqe ID
    public function __clone()
    {
        $this->id = 'invoice_' . time() + mt_rand(1, 10000);
    }

    public static function create(): static
    {
        return new static();
    }
}

// $invoice = new Invoice();

// $invoice2 = clone $invoice;
// $invoice2->id = 1;

var_dump( Invoice::create());
