<?php declare(strict_types=1);
namespace tdd;

use PHPUnit\Framework\TestCase;

final class FieldTest extends TestCase
{
    public function testIsInitiallyEmpty(): void
    {
        $field = new Field;

        $this->assertTrue($field->isEmpty());
    }

    public function testXCanBePlacedOnEmptyField(): void
    {
        $field = new Field;

        $field->placeX();

        $this->assertFalse($field->isEmpty());
    }

    public function testOCanBePlacedOnEmptyField(): void
    {
        $field = new Field;

        $field->placeO();

        $this->assertFalse($field->isEmpty());
    }
}
