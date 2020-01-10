<?php

class MainController
{
    private $request;

    public function __construct()
    {
        $this->request = !empty($_POST) ? $_POST : json_decode(file_get_contents('php://input'), true);
    }

    public static function validateCard() : void
    {
        $rule = new CardRule((new self)->request);

        $response =  new CardResponse($rule->validate());

        print_r($response->toJson());
    }
}