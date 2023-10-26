<?php

class MissingBillingInfoException extends Exception
{
    protected $message = 'Missing biling information.';
}

class Customer
{
    public function __construct(private array $billingInfo = []) {}

    public function getBillingInfo(): array
    {
        return $this->billingInfo;
    }
}

class Invoice
{
    public function __construct(public Customer $customer) {}

    public function process(float $amount): void
    {
        if($amount <= 0) {
            throw new InvalidArgumentException('Invalid invoice');
        }

        if(empty($this->customer->getBillingInfo())) {
            throw new MissingBillingInfoException();
        }
        echo 'processing $' . $amount . ' invoice -';

        sleep(1);

        echo'ok';
    }
}


$invoice = new Invoice(new Customer());

try {
    $invoice->process(-25);

} catch (MissingBillingInfoException|InvalidArgumentException $e) {
    echo $e->getMessage() . ' ' . $e->getFile() . ' ' . $e->getLine() . PHP_EOL;
} 
// catch(InvalidArgumentException) {
//     echo 'invalid argument exception';
// }

// if we return from try and catch and finally, only the value from finally would be returned.
