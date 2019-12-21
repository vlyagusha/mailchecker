<?php

declare(strict_types=1);

class Checker implements CheckerInterface
{
    public function check(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL, FILTER_FLAG_EMAIL_UNICODE) === $email;
    }
}
