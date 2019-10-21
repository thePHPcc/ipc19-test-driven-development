<?php declare(strict_types=1);

namespace tdd;

final class Calculator
{
    public function divide(int $dividend, int $divisor): int
    {
        return $dividend / $divisor;
    }
}
