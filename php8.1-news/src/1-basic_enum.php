<?php

enum Editor: string {
    case VSCode  = 'Visual Studio Code';
    case Idea    = 'Intellij Idea';
    case Sublime = 'Sublime Text';
}

function is_good(Editor $editor): string
{
    $yesMessage  = 'Yeah, %s is good';
    $nopeMessage = 'Nope, %s is not good';

    return sprintf(random_int(0, 1) === 1 ? $yesMessage : $nopeMessage, $editor->value);
}

echo is_good(Editor::VSCode)  . "\n";
echo is_good(Editor::Idea)    . "\n";
echo is_good(Editor::Sublime) . "\n";
