<?php

enum Editor: string {
    case VSCode  = 'Visual Studio Code';
    case Idea    = 'Intellij Idea';
    case Sublime = 'Sublime Text';

    public function creator(): string {
        return match ($this) {
            Editor::VSCode  => 'Microsoft',
            Editor::Idea    => 'JetBrains',
            Editor::Sublime => 'Someone',
        };
    }
}

echo Editor::Idea->creator();