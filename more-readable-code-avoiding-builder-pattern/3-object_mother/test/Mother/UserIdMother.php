<?php

declare(strict_types = 1);

use Faker\Factory;

final class UserIdMother
{
    public static function create(string $id)
    {
        return new UserId($id);
    }

    public static function random()
    {
        return self::create(Factory::create()->uuid);
    }
}
