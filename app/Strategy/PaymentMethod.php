<?php

namespace App\Strategy;

interface PaymentMethod
{
    public function pay(): string;
}
