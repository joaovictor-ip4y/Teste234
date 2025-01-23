<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    public function testAdd(): void
    {
        $calculator = new Calculator();
        $this->assertEquals(5, $calculator->add(2, 3));
    }

    public function testSubtract(): void
    {
        $calculator = new Calculator();
        $this->assertEquals(1, $calculator->subtract(3, 2));
    }

    public function testMultiply(): void
    {
        $calculator = new Calculator();
        $this->assertEquals(6, $calculator->multiply(2, 3));
    }

    public function testDivide(): void
    {
        $calculator = new Calculator();
        $this->assertEquals(2, $calculator->divide(6, 3));
    }

    public function testDivideByZero(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Division by zero is not allowed.");

        $calculator = new Calculator();
        $calculator->divide(6, 0);
    }

    public function testModulo(): void
    {
        $calculator = new Calculator();
        $this->assertEquals(1, $calculator->modulo(7, 3));
    }

    public function testPower(): void
    {
        $calculator = new Calculator();
        $this->assertEquals(8, $calculator->power(2, 3));
    }
}
