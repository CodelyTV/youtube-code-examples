<?php

declare(strict_types=1);

use Symfony\Contracts\Service\Attribute\Required;

class SomeService
{
    #[Required]
    public Bar $bar;

    #[Required]
    public function setFoo(Foo $foo): void
    {
        // ...
    }
}
