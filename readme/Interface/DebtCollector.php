<?php

namespace App;
// We can't have properties, only methods and constants. 
// And constants can not be overrided.
// interface DebtCollector
// {
//     public const MY_CONST =1;
//     // all methods must be public
//     public function collect(float $owedAmount): float;
// }

interface DebtCollector
{
     public function collect(float $owedAmount): float;
}