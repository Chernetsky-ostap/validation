<?php

namespace Classes;

class Validation
{
    public static function checkCardNumber($cardNumber): bool
    {
        if (!$cardNumber) {
            return false;
        }
        $number = strrev(preg_replace('/[^\d]/', '', $cardNumber));
        $sum = 0;
        for ($i = 0, $j = strlen($number); $i < $j; $i++) {
            if (($i % 2) == 0) {
                $val = $number[$i];
            } else {
                $val = $number[$i] * 2;
                if ($val > 9) {
                    $val -= 9;
                }
            }
            $sum += $val;
        }
        return (($sum % 10) === 0);
    }

    public static function checkCardHolder($cardHolder): bool
    {
        return strlen($cardHolder) <= 22 && strlen($cardHolder) > 2;
    }

    public static function checkString($object): bool
    {
        return is_string($object);
    }

    public static function required($object = false): bool
    {
        return $object ? true : false;
    }
}