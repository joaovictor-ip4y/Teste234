<?php

use App\StringUtils;
use PHPUnit\Framework\TestCase;

class StringUtilsTest extends TestCase
{
    private $stringUtils;

    protected function setUp(): void
    {
        $this->stringUtils = new StringUtils();
    }

    public function testToUpperCase()
    {
        $this->assertEquals('HELLO', $this->stringUtils->toUpperCase('hello'));
        $this->assertEquals('WORLD', $this->stringUtils->toUpperCase('world'));
    }

    public function testReverseString()
    {
        $this->assertEquals('olleh', $this->stringUtils->reverseString('hello'));
        $this->assertEquals('dlrow', $this->stringUtils->reverseString('world'));
    }

    public function testIsPalindrome()
    {
        $this->assertTrue($this->stringUtils->isPalindrome('madam'));
        $this->assertTrue($this->stringUtils->isPalindrome('A man, a plan, a canal, Panama'));
        $this->assertFalse($this->stringUtils->isPalindrome('hello'));
    }
}

