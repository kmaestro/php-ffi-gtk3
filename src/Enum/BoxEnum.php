<?php

declare(strict_types=1);

namespace Gtk3\Enum;

class BoxEnum
{
    public static function horizontal(): self
    {
        return new self(0);
    }

    public static function vertical(): self
    {
        return new self(1);
    }

    public function value(): int
    {
        return $this->value;
    }

    private function __construct(private int $value){}
}
