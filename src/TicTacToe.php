<?php declare(strict_types=1);
namespace tdd;

final class TicTacToe
{
    /**
     * @var Field
     */
    private $field;

    public function __construct(Field $field)
    {
        $this->field = $field;
    }

    public function placeX(): void
    {
        $this->field->placeX();
    }
}
