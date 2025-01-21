<?php

namespace Tests;

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $this->assertEquals(4, $calculator->add(2, 2));
    }

    // Testando apenas o método add(), o que reduz a cobertura
    public function testMultiply()
    {
        $calculator = new Calculator();
        $this->assertEquals(6, $calculator->multiply(2, 3));
    }
}

