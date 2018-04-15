<?php

declare(strict_types = 1);

final class User
{
    private const MIN_LEVEL_TO_EDIT_VIDEOS = 2;

    private $id;
    private $name;
    private $accessLevel;

    public function __construct(string $id, string $name, int $accessLevel)
    {
        $this->id          = $id;
        $this->name        = $name;
        $this->accessLevel = $accessLevel;
    }

    public function canEditVideos(): bool
    {
        return $this->accessLevel() >= self::MIN_LEVEL_TO_EDIT_VIDEOS;
    }

    public function id(): string
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function accessLevel(): int
    {
        return $this->accessLevel;
    }
}

function test_user_is_able_to_edit_video_with_enough_access_level(): void
{
    $user = new User('some-id', 'some-name', 3);

    assertThat(true, $user->canEditVideos());
}

function test_user_is_not_able_to_edit_videos_without_enough_access_level(): void
{
    $user = new User('some-id', 'some-name', 1);

    assertThat(false, $user->canEditVideos());
}

function assertThat(bool $expected, bool $actual): void
{
    if ($expected !== $actual) {
        throw new Exception('Condition not satisfied');
    }
}
