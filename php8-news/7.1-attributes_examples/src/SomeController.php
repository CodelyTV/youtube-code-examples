<?php

declare(strict_types=1);

use Symfony\Component\Routing\Annotation\Route;

class SomeController
{
    #[Route('/path', name: 'action')]
    public function someAction()
    {
        // ...
    }
}
