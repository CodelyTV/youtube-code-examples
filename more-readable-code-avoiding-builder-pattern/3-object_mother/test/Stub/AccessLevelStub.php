<?php

declare(strict_types = 1);

use Faker\Factory;

final class AccessLevelStub
{
    public static function create(int $accessLevel)
    {
        return new AccessLevel($accessLevel);
    }

    public static function random()
    {
        return self::create(Factory::create()->numberBetween(1, 10));
    }
}
