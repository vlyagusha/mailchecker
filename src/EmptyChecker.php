<?php

declare(strict_types=1);

class EmptyChecker implements CheckerInterface
{
    public function check(string $email): bool
    {
        return !empty($email);
    }
}
