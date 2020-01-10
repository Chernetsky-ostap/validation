<?php

namespace Classes;

use Interfaces\ResponseInterface;

class CardResponse implements ResponseInterface
{
    private $result;

    public function __construct($result)
    {
        $this->result = $result;
    }

    public function toJson()
    {
        return json_encode([
            'validation_result' => $this->result
        ]);
    }

    public function toArray()
    {
        return [
            'validation_result' => $this->result
        ];
    }
}