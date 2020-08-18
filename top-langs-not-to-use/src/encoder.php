<?php

require_once __DIR__ . '/../vendor/autoload.php';

$originalFileContents = file_get_contents($argv[1]);
$hiddenFileContents = file_get_contents($argv[2]);

// cleanup trailing whitespaces
$originalFileContents = preg_replace('/\s*$/', '', $originalFileContents);

$output = <<<CODE
$originalFileContents
$hiddenFileContents
CODE;

file_put_contents(__DIR__ . '/output.php', $output);
