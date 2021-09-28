<?php

// https://wiki.php.net/rfc/new_in_initializers

final class UserId
{
    public function __construct(public readonly string $value)
    {
    }
}

final class UserFullName
{
    public function __construct(public readonly string $name, public readonly string $surname)
    {
    }
}

final class User
{
    public function __construct(public readonly UserId $id, public readonly UserFullName $fullName)
    {
    }
}

final class UserIdMother
{
    public static function create(?string $value = null): UserId
    {
        return new UserId($value ?? 'random-generated-user-id-value');
    }
}

final class UserFullNameMother
{
    public static function create(?string $name = null, ?string $surname = null): UserFullName
    {
        return new UserFullName($name ?? 'random-generated-user-name', $surname ?? 'random-generated-user-surname');
    }
}

final class UserMother
{
    public static function create(?UserId $id = null, ?UserFullName $fullName = null): User
    {
        return new User($id ?? UserIdMother::create(), $fullName ?? UserFullNameMother::create());
    }
}

$user = UserMother::create();

echo $user->id->value . "\n";
echo $user->fullName->name . "\n";
echo $user->fullName->surname . "\n";

