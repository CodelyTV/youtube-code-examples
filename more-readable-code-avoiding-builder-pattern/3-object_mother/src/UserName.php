<?php

declare(strict_types = 1);

final class UserName
{
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }
}
