<?php declare(strict_types=1);
namespace tdd;

class Field
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
        if (!$this->isEmpty()) {
            throw new \RuntimeException('Cannot place X on non-empty field');
        }

        $this->symbol = 'X';
    }

    public function placeO(): void
    {
        if (!$this->isEmpty()) {
            throw new \RuntimeException('Cannot place O on non-empty field');
        }

        $this->symbol = 'O';
    }
}
