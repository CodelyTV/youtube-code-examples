<?php

declare(strict_types = 1);

final class UserStub
{
    public static function create(UserId $id, UserName $name, AccessLevel $accessLevel)
    {
        return new User($id, $name, $accessLevel);
    }

    public static function withId(UserId $id)
    {
        return self::create($id, UserNameStub::random(), AccessLevelStub::random());
    }

    public static function withValues(string $id, string $name, int $accessLevel)
    {
        return self::create(
            UserIdStub::create($id),
            UserNameStub::create($name),
            AccessLevelStub::create($accessLevel)
        );
    }

    public static function withAccessLevel(int $accessLevel)
    {
        return self::create(UserIdStub::random(), UserNameStub::random(), AccessLevelStub::create($accessLevel));
    }

    public static function random()
    {
        return self::create(UserIdStub::random(), UserNameStub::random(), AccessLevelStub::random());
    }
}
