<?php declare(strict_types=1);

namespace tdd;

use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
{
    public function test_Result_of_10_divided_by_2_should_be_5(): void
    {
        $calculator = new Calculator;

        $this->assertSame(5, $calculator->divide(10, 2));
    }
}
