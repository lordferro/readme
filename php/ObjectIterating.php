<?php

class Invoice
{
    public string $id;

    public function __construct(public float $amount)
    {
        $this->id = random_int(10000, 999999999);
    }

}

// class InvoiceCollection implements Iterator
// {
//     public function __construct(public array $invoices) {}

//     public function current()
//     {
//         echo __METHOD__ . PHP_EOL;
//         return current($this->invoices);
//     }

//     public function next()
//     {
//         echo __METHOD__ . PHP_EOL;
//         next($this->invoices);
//     }

//     public function rewind()
//     {
//         echo __METHOD__ . PHP_EOL;
//         reset($this->invoices);
//     }


//     public function key()
//     {
//         echo __METHOD__ . PHP_EOL;
//         return key($this->invoices);
//     }


//     public function valid()
//     {
//         echo __METHOD__ . PHP_EOL;
//         return current($this->invoices) !== false;
//     }
// }
class Collection implements IteratorAggregate
{
    public function __construct(private array $collection) {}

    public function getIterator()
    {
        return new ArrayIterator($this->collection);
    }
}

class InvoiceCollection extends Collection {}

$invoiceCollection = new InvoiceCollection([new Invoice(25),new Invoice(15),new Invoice(35)]);

foreach($invoiceCollection as $invoice) {
    echo $invoice->id . PHP_EOL;
    echo $invoice->amount . PHP_EOL;
    ;
}
