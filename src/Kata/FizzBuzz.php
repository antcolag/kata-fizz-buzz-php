<?php

namespace Kata;

class FizzBuzz
{
    public Printer $printer;

    public function __construct(Printer $printer = null) {
        $this->printer = $printer;
    }

    public function handle(int $arg = 100): bool
    {
        $current = 0;
        while(++$current <= $arg){
            if(!($current % 15)) {
                $this->printer->print('FizzBuzz');
            } elseif(!($current % 3)) {
                $this->printer->print('Fizz');
            } elseif(!($current % 5)) {
                $this->printer->print('Buzz');
            } else {
                $this->printer->print((string) $current);
            }
        }

        return true;
    }
}
