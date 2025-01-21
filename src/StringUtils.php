<?php

namespace App;

class StringUtils
{
    public function toUpperCase(string $input): string
    {
        return strtoupper($input);
    }

    public function reverseString(string $input): string
    {
        return strrev($input);
    }

    public function isPalindrome(string $input): bool
    {
        $processed = strtolower(preg_replace('/[^a-z0-9]/i', '', $input));
        return $processed === strrev($processed);
    }
}
