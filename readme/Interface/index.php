<?php
use App\CollectionAgency;
use App\DebtCollectionService;
use App\Rocky;


spl_autoload_register(
    function ($class) {
        $path = explode("\\", $class)[1] . ".php";

        require_once "$path";
    }
);

$service = new DebtCollectionService();
echo $service->collectDebt(new Rocky()) . PHP_EOL;