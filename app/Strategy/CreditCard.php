<?php

namespace App\Strategy;

class CreditCard implements PaymentMethod
{
    public function pay(): string
    {
        return "credit  card";
    }
}
