<?php

declare(strict_types=1);

namespace CodelyTv\Shared\Infrastructure\EventBus;

use Attribute;

#[Attribute]
final class SubscribedTo
{
    public string $event;

    public function __construct(string $event)
    {
        $this->event = $event;
    }
}
