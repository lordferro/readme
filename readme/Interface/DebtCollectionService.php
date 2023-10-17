<?php

namespace App;

class DebtCollectionService
{
    // polymorphism $collector - because $collector can be CollectionAgency or Rocky class, because they both implements DebtCollector Interface
    public function collectDebt(DebtCollector  $collector)
    {
        $owedAmount = mt_rand(100, 1000);
        $collectedAmount = $collector->collect($owedAmount);
        echo 'Collected ' . $collectedAmount . ' out of ' . $owedAmount . PHP_EOL;
    }
}