<?php

declare(strict_types=1);

use CodelyTv\Shared\Infrastructure\VisualizeEventSubscribers;

require __DIR__ . '/vendor/autoload.php';

$visualizer = new VisualizeEventSubscribers();

$visualizer->visualize();
