<?php

final class User {
    private float|int $age;

    public function __construct(int|float $age)
    {
        $this->age = $age;
    }

}

var_dump(new User(18));
var_dump(new User(18.5));
