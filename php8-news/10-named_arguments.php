<?php

final class Course
{
    public function __construct(
        private string $id,
        private string $name,
        private bool $isPublic
    ) {
    }
}

$course = new Course(
    "14f5f65c-f6a9-4144-87ad-cf938945b203",
    "Novedades PHP 8",
    isPublic: false
);

$course2 = new Course(
    name: "Novedades PHP 8",
    id: "14f5f65c-f6a9-4144-87ad-cf938945b203",
    isPublic: false
);

var_dump($course);
var_dump($course2);
