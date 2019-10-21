<?php declare(strict_types=1);
namespace tdd;

use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
{
    /**
     * @dataProvider divisionProvider
     * @testdox $dividend ÷ $divisor = $expected
     */
    public function test_Result_of_whatever_divided_by_whatever_should_be_whatever(int $expected, int $dividend, int $divisor): void
    {
        $calculator = new Calculator;

        $this->assertSame($expected, $calculator->divide($dividend, $divisor));
    }

    public function divisionProvider(): array
    {
        return [
            '10 / 2 = 5' => [
                5, 10, 2,
            ],
            '12 / 4 = 3' => [
                3, 12, 4,
            ],
        ];
    }
}
