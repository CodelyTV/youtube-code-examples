<?php

final class UserId
{
    public function __construct(public readonly string $value) {}
}

final class UserFullName
{
    public function __construct(public readonly string $name, public readonly string $surname) {}
}

final class User
{
    public function __construct(public readonly UserId $id, public readonly UserFullName $fullName) {}

//    public function rename(string $newName):void
//    {
//        $this->name = $newName;
//    }
}

$user = new User(new UserId("some-id"), new UserFullName("some-name", "some-surname"));

echo $user->id->value . "\n";
echo $user->fullName->name . "\n";
echo $user->fullName->surname . "\n";
