<?php

class CardRule implements RuleInterface
{
    private ?string $cardNumber;
    private ?string $cardHolder;

    public function __construct(array $object)
    {
        $this->cardNumber = $object['cardnumber'] ?? '';
        $this->cardHolder = $object['cardholder'] ?? '';
    }

    public function validate() : bool
    {
        return Validation::checkCardNumber($this->cardNumber) ? Validation::checkCardHolder($this->cardHolder) : false;
    }
}