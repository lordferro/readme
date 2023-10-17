<?php

class Invoice {
    public function __invoke(){
    var_dump('react if we invoke object ');
}
    
}
$invoice = new Invoice();
$invoice();