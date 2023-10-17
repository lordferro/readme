<?php

class Invoice
{
    private float $amount = 12;
    private int $id = 123564;
    private string $accountNumber = "123456789";

    public function __debugInfo(): ?array
    {
        return ['id' => $this->id, 'accountNumber' => '****' . substr($this->accountNumber, -4)];
    }
}

$invoice = new Invoice();

var_dump($invoice);

// we control wich properties can be shown