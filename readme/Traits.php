<?php

class CoffeeMaker
{
    public function makeCoffee()
    {
        echo static::class . ' is making coffee ' . PHP_EOL;
    }
}

class LatteMaker extends CoffeeMaker
{
    use LatteTrait;
}

class CappuccinoMaker extends CoffeeMaker
{
    use CappuccinoTrait;
}

trait LatteTrait
{
    public function makeLatte()
    {
        echo static::class . ' is making latte ' . PHP_EOL;
    }
}

trait CappuccinoTrait
{
    public function makeCappuccino()
    {
        echo static::class . ' is making cappuccino ' . PHP_EOL;
    }
}

class AllInOneCoffeeMaker extends CoffeeMaker
{
    use LatteTrait, CappuccinoTrait;
}

$coffeeMaker = new CoffeeMaker();
$latteMaker = new LatteMaker();
$cappuccinoMaker = new CappuccinoMaker();
$allInOneCoffeeMaker = new AllInOneCoffeeMaker();

$coffeeMaker->makeCoffee();
$latteMaker->makeCoffee();
$latteMaker->makeLatte();
$cappuccinoMaker->makeCoffee();
$cappuccinoMaker->makeCappuccino();
$allInOneCoffeeMaker->makeCoffee();
$allInOneCoffeeMaker->makeLatte();
$allInOneCoffeeMaker->makeCappuccino();


// the precedence: declaring method in the class - override all.
// use Trait - override methods extended from other class.

// if we have to methods with the same name from different traits:
    // use Trait1;
    // use Trait2{
    //     Trait2::method insteadof Trait1;
    // };

// or we can use alias
// use Trait1;
// use Trait2{
//     Trait2::method as method2;
// };

// we can change visibility of methods when using traits    
// use Trait1;
// use Trait2{
//     Trait2::method as public;
// };

// in case of inharitance static properties is on for each instance.
// In the trait each class that implement this trait have own copy of static property.