<?php

namespace Kata;

use PHPUnit\Framework\TestCase;

class PrinterTest extends TestCase
{
    private $printer;

    protected function setUp(): void
    {
        $this->printer = new Printer();
    }

    public function testShallPass(): void
    {
        $string = 'test';
        $this->printer->print($string);
        $this->expectOutputString($string);
    }
}
