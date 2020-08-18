<?php

require_once __DIR__ . '/../vendor/autoload.php';

use igorw\whitespace as w;

$outputFile = __DIR__ . '/output.php';

$outputFileContents = file_get_contents($outputFile);

if (preg_match('/\s+$/', $outputFileContents, $matches)) {
    $whitespace = substr($matches[0], 1);

    system("stty -icanon");
    w\evaluate(w\parse(str_split($whitespace)));
}
