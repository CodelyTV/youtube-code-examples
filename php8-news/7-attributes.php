<?php

use Symfony\Component\Routing\Annotation\Route;

// Before
final class CoursePostController
{
    /**
     * @Route("/courses", "create_course")
     */
    public function create(): Response
    {
        // Controller stuff
    }
}

// After
final class NewCoursePostController
{
    #[Route('/courses', 'create_course')]
    public function create(): Response
    {
        // Controller stuff
    }
}
