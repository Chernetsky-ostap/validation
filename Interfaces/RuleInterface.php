<?php

namespace Interfaces;

interface RuleInterface
{
    public function validate(array $object = []): array;
}