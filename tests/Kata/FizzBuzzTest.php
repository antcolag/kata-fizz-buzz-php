<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    private $fizzBuzz;

    protected function setUp(): void
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    public function testItReturnsString1WhenReceivingNumber1(): void
    {
        $actual = $this->fizzBuzz->handle(1);
        $this->assertSame("1", $actual);
    }

    public function testItReturnsString2WhenReceivingNumber2(): void
    {
        $actual = $this->fizzBuzz->handle(2);
        $this->assertSame("2", $actual);
    }
}
