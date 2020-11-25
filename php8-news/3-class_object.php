<?php

namespace Codely\YouTube\PhpNews;

final class Course {
    public function categories(): ?array
    {
        return null;
    }

    public static function create(): self
    {
        return new self();
    }
}

$course = new Course();

var_dump(Course::class);
var_dump($course::class);
var_dump((new Course())::class);
var_dump(Course::create()::class);
