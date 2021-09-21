<?php

namespace Kata;

class InputNumber
{
    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function equals(InputNumber $number): bool
    {
        return $this->value === $number->value;
    }

    public function toOutputString(): OutputString
    {
        return new OutputString((string) $this->value);
    }
}