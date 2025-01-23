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
        $this->expectExceptionMessage("Cannot divide by zero.");

        $calculator = new Calculator();
        $calculator->divide(6, 0);
    }

    public function testSkipped(): void
    {
        $this->markTestSkipped("This test is skipped intentionally.");
    }

    public function testConditionalSkip(): void
    {
        if (!extension_loaded('xdebug')) {
            $this->markTestSkipped("Xdebug extension is not loaded.");
        }

        $calculator = new Calculator();
        $this->assertEquals(2, $calculator->divide(6, 3));
    }
}
