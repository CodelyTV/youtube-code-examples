<?php

enum Editor: string
{
    case vscode = 'Visual Studio Code';
    case intellij = 'Intellij';
}

function is_good(Editor $editor): string
{
    $yesMessage = '%s is a good editor';
    $noMessage  = '%s is a bad editor';

    return sprintf(random_int(0, 1) === 1 ? $yesMessage : $noMessage, $editor->value);
}

$editor = Editor::intellij;

echo is_good($editor);
