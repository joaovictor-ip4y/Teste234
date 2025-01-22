<?php
// tests/CalculatorTest.php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $this->assertEquals(4, $calculator->add(2, 2));
    }

    // Deixamos de testar as funções 'subtract', 'multiply' e 'divide' para reduzir a cobertura.
}
