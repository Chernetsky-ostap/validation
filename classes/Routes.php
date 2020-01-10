<?php

namespace Classes;

class Routes
{
    private $routes = [
        '/validate' => 'Controllers\MainController::validateCard'
    ];

    public function __construct()
    {
        try {
            foreach ($this->routes as $uri => $call) {
                if (strtok($_SERVER["REQUEST_URI"], '?') == $uri) {
                    return $call();
                }
            }
        } catch (\Throwable $exception) {
            // Some logger logic
        }
        return http_response_code(404);
    }

}