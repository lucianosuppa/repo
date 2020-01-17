<?php

namespace MixPlay\Math;

class CientificCalculator extends Calculator
{
    public function __construct($x = 0)
    {
        parent::__construct($x);
    }

    public function pow($x) : calculator
    {
        $this->result = $this->result ** $x;

        return $this;
    }
}

?>