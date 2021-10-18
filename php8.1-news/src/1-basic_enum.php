<?php

enum Editor: string
{
    case vscode = 'Visual Studio Code';
    case intellij = 'Intellij';

    public function isGood(): string
    {
        $yesMessage = '%s is a good editor';
        $noMessage  = '%s is a bad editor';

        return sprintf(random_int(0, 1) === 1 ? $yesMessage : $noMessage, $this->value);
    }
}

$editor = Editor::intellij;

echo $editor->isGood();
