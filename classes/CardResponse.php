<?php

class CardResponse implements ResponseInterface
{
    private $data;

    public function __construct($array = null)
    {
        $this->data = $array;
    }

    public function toJson()
    {
        return json_encode([
            'validation_result' => $this->data
        ]);
    }

    public function toArray()
    {
        return [
            'validation_result' => $this->data
        ];
    }
}