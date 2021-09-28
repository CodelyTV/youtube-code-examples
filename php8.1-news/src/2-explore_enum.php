<?php

enum Editor: string {
    case VSCode  = 'Visual Studio Code';
    case Idea    = 'Intellij Idea';
    case Sublime = 'Sublime Text';

    public function creator(): string {
        return match ($this) {
            self::VSCode  => 'Microsoft',
            self::Idea    => 'JetBrains',
            self::Sublime => 'Someone',
        };
    }
}

echo Editor::Idea->creator();
