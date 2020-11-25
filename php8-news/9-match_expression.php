<?php

$errorCode    = 504;
$errorMessage = match ($errorCode) {
    404 => 'User not found',
    407 => 'User not verified',
    default => 'Internal server error',
};

var_dump($errorMessage);
