<?php

namespace MixPlay\Math;

use InvalidArgumentException;

class CalculatorFactory 
{
    const SCIENTIFIC = 1;
    const ASTRONOMIC = 2;
    const REGULAR = 3;
    public static $COUNTER = 0;

    private function __construct()
    {

    }


    public static function createCalculator (int $type) : calculator
    {

        self::$COUNTER++;

        if ($type == self::SCIENTIFIC) {
            return new CientificCalculator;
        }
            
        if ($type == self::ASTRONOMIC) {
            //devuelvo astronimica
            return new AstronomicCalculator;
        }
    
        if ($type == self::REGULAR) {
            return new Calculator;
        }

        throw new InvalidArgumentException('Missing calculator type, given' . $type);
    }
}