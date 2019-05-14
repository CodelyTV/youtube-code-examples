<?php

declare(strict_types = 1);

use Faker\Factory;

final class UserNameMother
{
    public static function create(string $name)
    {
        return new UserName($name);
    }

    public static function random()
    {
        return self::create(Factory::create()->name);
    }
}
