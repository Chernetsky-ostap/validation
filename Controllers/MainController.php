<?php

namespace Controllers;

use Classes\CardRule;
use Classes\CardResponse;

class MainController
{
    private $request;

    public function __construct()
    {
        $this->request = !empty($_POST) ? $_POST : json_decode(file_get_contents('php://input'), true);
    }

    public static function validateCard(): void
    {
        $validate = (new CardRule)->validate((new self)->request);

        $response = new CardResponse((count($validate) ? $validate : 'success'));

        print_r($response->toJson());
    }
}