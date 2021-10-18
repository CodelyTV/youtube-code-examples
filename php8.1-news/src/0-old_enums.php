<?php

final class Editor {
    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function vscode(): self
    {
        return new self('vscode');
    }

    public static function intellij(): self
    {
        return new self('intellij');
    }

    public function value(): string
    {
        return $this->value;
    }
}

$editor = Editor::vscode();

echo $editor->value();
