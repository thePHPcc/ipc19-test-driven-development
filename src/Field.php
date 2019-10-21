<?php declare(strict_types=1);
namespace tdd;

final class Field
{
    /**
     * @var string
     */
    private $symbol;

    public function isEmpty(): bool
    {
        return $this->symbol === null;
    }

    public function placeX(): void
    {
        $this->symbol = 'X';
    }

    public function placeO(): void
    {
        $this->symbol = 'O';
    }
}
