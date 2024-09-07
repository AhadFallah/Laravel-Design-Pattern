<?php

namespace App\Strategy;

class PaymentStrategy
{
    private PaymentMethod $paymentMethod;
    public function __construct(string $payment)
    {
        $this->paymentMethod = match($payment) {
            "CreditCard" => new CreditCard(),
            "ApplePay" => new ApplePay(),
        };
    }
    public function pay()
    {
        return $this->paymentMethod->pay();
    }
}
