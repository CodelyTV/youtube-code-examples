<?php

function test_user_is_able_to_edit_video_with_enough_access_level(): void
{
    $user = UserStub::withAccessLevel(3);

    assert(true, $user->canEditVideos());
}

function test_user_is_not_able_to_edit_videos_without_enough_access_level(): void
{
    $user = UserStub::withAccessLevel(1);

    assert(false, $user->canEditVideos());
}

function assert(bool $expected, bool $actual): void
{
    if ($expected !== $actual) {
        throw new Exception('Condition not satisfied');
    }
}
