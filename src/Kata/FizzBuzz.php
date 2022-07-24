<?php

namespace Kata;

class FizzBuzz
{
    public Printer $printer;

    public function __construct(Printer $printer = null) {
        $this->printer = $printer;
    }

    public function handle(int $arg = 100, int $current = 1): bool
    {
        $isFizzBuzz = (str_repeat('Fizz', !($current % 3)) . str_repeat('Buzz', !($current % 5)));
        $this->printer->print(
            $isFizzBuzz ? $isFizzBuzz : (string) $current
        );
        return (!($arg > $current)) || $this->handle($arg, $current + 1);
    }
}
