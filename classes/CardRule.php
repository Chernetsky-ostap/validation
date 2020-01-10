<?php

namespace Classes;

use Interfaces\RuleInterface;

class CardRule implements RuleInterface
{
    private $rules = [
        'cardnumber' => [
            'checkString' => 'is not a string', 'checkCardNumber' => 'is not valid', 'required' => 'field required'
        ],
        'cardholder' => [
            'checkString' => 'is not a string', 'checkCardHolder' => 'is not valid', 'required' => 'field required'
        ]
    ];

    public function validate(array $object = []): array
    {
        $validate = [];
        foreach ($this->rules as $field => $list) {
            foreach ($list as $rule => $message) {
                try {
                    if (!Validation::$rule($object[$field])) {
                        $validate[$field] = $message;
                    }
                } catch (\Throwable $exception) {
                    $validate[$exception->getCode()] = $exception->getMessage();
                }

            }
        }
        return $validate;
    }
}