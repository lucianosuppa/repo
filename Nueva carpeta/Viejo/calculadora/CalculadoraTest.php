<?php

require_once('./vendor/autoload.php');
require('./Calculadora.php');

use PHPUnit\Framework\TestCase;

final class CalculadoraTest extends TestCase
{
    public function testExisteCalculadora()
    {
        $this->assertTrue(class_exists("Calculadora"));
    }

    public function testSiSuma()
    {
        $x = rand (0,9);
        $y = rand (0,9);
        $calculadora = new Calculadora();
        $this->assertEquals($x+$y,$calculadora->suma($x,$y));
    }

    public function testSiResta()
    {
        $x = rand (0,9);
        $y = rand (0,9);
        $calculadora = new Calculadora($x,$y);
        $this->assertEquals($x-$y,$calculadora->resta($x,$y));
    }
    
    public function testSiMultiplica()
    {
        $x = rand (0,9);
        $y = rand (0,9);
        $calculadora = new Calculadora($x,$y);
        $this->assertEquals($x*$y,$calculadora->multiplicacion($x,$y));
    }

    public function testSiDivide()
    {
        $x = rand (0,9);
        $y = rand (0,9);
        $calculadora = new Calculadora($x,$y);
        $this->assertEquals($x/$y,$calculadora->division($x,$y));
    }
}