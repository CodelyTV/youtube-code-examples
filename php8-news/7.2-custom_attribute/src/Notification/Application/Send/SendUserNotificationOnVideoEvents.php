<?php

declare(strict_types=1);

namespace CodelyTv\Notification\Application\Send;

use CodelyTv\Shared\Infrastructure\EventBus\SubscribedTo;
use CodelyTv\Video\Domain\VideoCreated;
use CodelyTv\Video\Domain\VideoUpdated;

final class SendUserNotificationOnVideoEvents
{
    #[SubscribedTo(VideoCreated::class)]
    public function onCreated(VideoCreated $event): void {

    }

    #[SubscribedTo(VideoUpdated::class)]
    public function onUpdated(VideoUpdated $event): void {

    }

}
