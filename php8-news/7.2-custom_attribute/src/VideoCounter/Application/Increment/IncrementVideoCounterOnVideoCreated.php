<?php

declare(strict_types=1);

namespace CodelyTv\VideoCounter\Application\Increment;

use CodelyTv\Shared\Infrastructure\EventBus\SubscribedTo;
use CodelyTv\Video\Domain\VideoCreated;

final class IncrementVideoCounterOnVideoCreated
{
    #[SubscribedTo(VideoCreated::class)]
    public function on(VideoCreated $event):void {

    }
}
