<?php declare(strict_types=1);
namespace tdd;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class TicTacToeTest extends TestCase
{
    public function testXCanBePlaced(): void
    {
        /** @var Field|MockObject $field */
        $field = $this->createMock(Field::class);

        $field->expects($this->once())->method('placeX');

        $game = new TicTacToe($field);

        $game->placeX();
    }
}
