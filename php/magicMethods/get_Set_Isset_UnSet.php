<?php

class Invoice
{
    protected array $data = [];


    public function __get(string $name)
    {
        $this->data[$name];
    }

    public function __set(string $name, string $value)
    {
        $this->data[$name] = $value;
        var_dump($this->data);
    }

    public function __isset($name)
    {
        return array_key_exists($name, $this->data);
    }

    public function __unset($name){
        unset($this->data[$name]);
    }
}

$invoice = new Invoice();
$invoice->amount = 15;
$invoice->amount2 = 35;
var_dump(isset($invoice->amount));
unset($invoice->amount);
var_dump(isset($invoice->amount));

// echo $invoice->amount;
// we automaticly use getter and setter for each protected or private property. Otherwise we need to create a getter and setter for each property.