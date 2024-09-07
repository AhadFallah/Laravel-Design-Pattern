<?php

namespace App\Factory;

interface Formatter
{
    public function format(array $data): string;
}
