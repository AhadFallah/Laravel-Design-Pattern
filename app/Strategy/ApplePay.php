<?php

namespace App\Strategy;

class ApplePay implements PaymentMethod
{
    public function pay(): string
    {
        return "apple pay";
    }
}
