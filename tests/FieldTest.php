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
}
