<?php

declare(strict_types=1);

namespace CodelyTv\Shared\Infrastructure;

use CodelyTv\Notification\Application\Send\SendUserNotificationOnVideoEvents;
use CodelyTv\Shared\Infrastructure\EventBus\SubscribedTo;
use CodelyTv\VideoCounter\Application\Increment\IncrementVideoCounterOnVideoCreated;
use ReflectionClass;

final class VisualizeEventSubscribers
{
    private static array $subscribers = [
        SendUserNotificationOnVideoEvents::class,
        IncrementVideoCounterOnVideoCreated::class,
    ];

    public function visualize(): void
    {
        $events = [];
        foreach (self::$subscribers as $subscriberClass) {
            $events = array_merge_recursive($events, $this->visualizeFor($subscriberClass));
        }

        print_r($events);
    }

    private function visualizeFor($subscriberClass): array
    {
        $reflectionClass = new ReflectionClass($subscriberClass);

        $listeners = [];

        foreach ($reflectionClass->getMethods() as $method) {
            $attributes = $method->getAttributes(SubscribedTo::class);

            foreach ($attributes as $attribute) {
                $subscriber = $attribute->newInstance();

                $listeners[$subscriber->event] = [
                    [
                        'class'  => $subscriberClass,
                        'method' => $method->getName(),
                    ],
                ];
            }
        }

        return $listeners;
    }
}
