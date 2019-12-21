<?php

declare(strict_types=1);

class RegexpChecker extends CheckerDecorator
{
    public function check(string $email): bool
    {
        return $this->checker->check($email) && $this->checkRegexp($email);
    }

    private function checkRegexp(string $email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL, FILTER_FLAG_EMAIL_UNICODE) === $email;
    }
}
