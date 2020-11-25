<?php
declare(strict_types=1);

final class Course {
    public function categories(): ?array
    {
        return null;
    }
}

$course = new Course();

// Before
$firstCategoryName = null;
if (null !== $course) {
    if (null !== $course->categories()) {
        if (null !== $course->categories()->first()) {
            $firstCategoryName = $course->categories()->first()->name();
        }
    }
}

// After
$firstCategoryName = $course?->categories()?->first()?->name();

var_dump($firstCategoryName);
