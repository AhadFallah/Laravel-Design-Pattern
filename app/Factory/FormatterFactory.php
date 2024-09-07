<?php

namespace App\Factory;

class FormatterFactory
{
    public function getFormatter(string $formatter): Formatter
    {
        return match($formatter) {
            'json' => new JsonFormatter(),
            default => throw new \InvalidArgumentException("wrong argument"),

        };
    }
}
