<?php

class Invoice
{
    protected function process(float $amount, $description)
    {
        var_dump($amount, $description);
    }

    public function __call(string $method, array $args)
    {
        if(method_exists($this, $method)) {
            call_user_func_array([$this, $method], $args);
            // or this way
            // $this->$method(...$args);
        } else {
            var_dump("magic method", $method, $args);
        }


    }

    public static function __callStatic(string $method, array $args)
    {
        var_dump($method, $args);
    }
}

$invoice = new Invoice();

$invoice->process(15, 'description');
// $invoice::process(1,2);