<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $result = $this->add(2, 3);
        $this->assertEquals(5, $result);
    }

    private function add($a, $b)
    {
        return $a + $b;
    }
}
