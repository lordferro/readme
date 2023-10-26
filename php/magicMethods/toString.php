<?php class Invoice{

public $amount = 10;
    
    public function __toString():string {
        
        return 'we act with object like with string';
    }
}

$invoice = new Invoice();

echo $invoice;