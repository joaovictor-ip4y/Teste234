<?php

namespace App\Tests;

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private $calculator;

    // Setup do teste
    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    // Teste que vai passar
    public function testAdd()
    {
        $result = $this->calculator->add(2, 3);
        $this->assertEquals(5, $result);
    }

    // Teste que vai falhar
    public function testSubtract()
    {
        $result = $this->calculator->subtract(5, 3);
        // Aqui vamos fazer o teste falhar propositalmente
        $this->assertEquals(10, $result); // Esperado 10, mas o cálculo correto é 2
    }

    // Teste que vai ser pulado
    /**
     * @testdox This test will be skipped
     * @doesNotPerformAssertions
     */
    public function testMultiply()
    {
        $this->markTestSkipped("This test is skipped intentionally");
    }

    // Teste para dividir
    public function testDivide()
    {
        $result = $this->calculator->divide(10, 2);
        $this->assertEquals(5, $result);

        // Test division by zero - será falho
        $this->expectException(\DivisionByZeroError::class);
        $this->calculator->divide(10, 0);
    }
}
