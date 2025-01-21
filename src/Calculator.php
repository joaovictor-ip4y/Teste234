<?php

namespace App;

class Calculator
{
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }

    public function multiply(int $a, int $b): int
    {
        return $a * $b;
    }

    // Método não coberto pelos testes
    public function subtract(int $a, int $b): int
    {
        return $a - $b;
    }
}
