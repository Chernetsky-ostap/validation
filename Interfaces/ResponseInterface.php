<?php

namespace Interfaces;

interface ResponseInterface
{
    public function toJson();

    public function toArray();
}