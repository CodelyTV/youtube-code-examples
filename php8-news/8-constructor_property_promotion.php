<?php

final class Course
{
    public function __construct(
        private string $id,
        private string $name,
        private int $rating,
        public array $comments
    ) {
    }

    public function details(): string
    {
        return "$this->id: $this->name";
    }
}

$course = new Course(
    "14f5f65c-f6a9-4144-87ad-cf938945b203",
    "Novedades PHP 8",
    5,
    ['Me ha ayudado mucho en la migración, gracias!', 'Es lo mejor CodelyTV Pro']
);

var_dump($course->comments);
var_dump($course->details());
