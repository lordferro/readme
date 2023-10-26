<?php

class Customer
{
    public string $name;
}

class Transaction
{
    /**
     * Summary of process
     * @param string|int $customer
     * @param float $amount
     * @throws Exception
     * @return bool
     */
    public function process($customer, $amount)
    {
        return true;
    }

    // variant 1
    public function foo(array $arr)
    {
        /** @var Customer $obj */
        foreach($arr as $obj) {
            $obj ->name;
        }
    }
    // variant 2
    /**
     * Summary of foo2
     * @param Customer[] $arr
     * @return void
     */
    public function foo2(array $arr)
    {
        foreach($arr as $obj) {
            $obj->name;
        }
    }
}
