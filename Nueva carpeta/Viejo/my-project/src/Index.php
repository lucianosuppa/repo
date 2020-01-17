<?php

require '../vendor/autoload.php';

use MixPlay\Math\CalculatorFactory;

try {

    $calc = CalculatorFactory::createCalculator(1);

    $calc
    ->sub(10)
    ->mul(5)
    ->pow(2)
    ->add(45)
    ->div(1)
    ;

    echo $calc->getresult();

} catch (\InvalidArgumentException $e){
    echo $e->getMessage();
}
