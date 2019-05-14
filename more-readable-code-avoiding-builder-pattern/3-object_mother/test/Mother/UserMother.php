<?php

declare(strict_types = 1);

final class UserMother
{
    public static function create(UserId $id, UserName $name, AccessLevel $accessLevel)
    {
        return new User($id, $name, $accessLevel);
    }

    public static function withId(UserId $id)
    {
        return self::create($id, UserNameMother::random(), AccessLevelMother::random());
    }

    public static function withValues(string $id, string $name, int $accessLevel)
    {
        return self::create(
            UserIdMother::create($id),
            UserNameMother::create($name),
            AccessLevelMother::create($accessLevel)
        );
    }

    public static function withAccessLevel(int $accessLevel)
    {
        return self::create(UserIdMother::random(), UserNameMother::random(), AccessLevelMother::create($accessLevel));
    }

    public static function random()
    {
        return self::create(UserIdMother::random(), UserNameMother::random(), AccessLevelMother::random());
    }
}
