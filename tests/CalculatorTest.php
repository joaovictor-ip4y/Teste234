<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTest extends TestCase
{
    private Calculator $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testAdd(): void
    {
        $this->assertEquals(5, $this->calculator->add(2, 3));
        $this->assertEquals(0, $this->calculator->add(0, 0));
        $this->assertEquals(-5, $this->calculator->add(-2, -3));
    }

    public function testSubtract(): void
    {
        $this->assertEquals(1, $this->calculator->subtract(3, 2));
        $this->assertEquals(-1, $this->calculator->subtract(2, 3));
        $this->assertEquals(0, $this->calculator->subtract(2, 2));
    }

    public function testMultiply(): void
    {
        $this->assertEquals(6, $this->calculator->multiply(2, 3));
        $this->assertEquals(0, $this->calculator->multiply(2, 0));
        $this->assertEquals(-6, $this->calculator->multiply(2, -3));
    }

    public function testDivide(): void
    {
        $this->assertEquals(2.0, $this->calculator->divide(6, 3));
        $this->assertEquals(1.5, $this->calculator->divide(3, 2));

        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage("Division by zero is not allowed.");
        $this->calculator->di
