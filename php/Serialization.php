<?php

class Invoice
{
    public string $id;


    public function __construct(
        public float $amount,
        public string $description,
        public string $creditCardNumber,
    ) {
        $this->id = 'invoice_' . time() + mt_rand(1, 10000);
    }

    // Called before the serialization
    // public function __sleep(): array
    // {
    //     // only those properties will be serialized
    //     return ['id', 'amount'];
    // }

    // // Called right after unserialization
    // public function __wakeup(): void {}

    public function __serialize(): array
    {
        return ['id' => $this->id,
        'amount' => $this->amount,
        'description' => $this->description,
        'creditCardNumber' => base64_encode($this->creditCardNumber),
    'foo' => 'bar'];
    }

    public function __unserialize(array $data): void
    {
        $this->id = $data['id'];
        $this->amount = $data['amount'];
        $this->description = $data['description'];
        $this->creditCardNumber = base64_decode($data['creditCardNumber']);
        var_dump($data);
    }



}

$invoice = new Invoice(25, 'Invoice 1', '123654654684');

$str = serialize($invoice);

$invoice2 = unserialize($str);

var_dump($invoice2);