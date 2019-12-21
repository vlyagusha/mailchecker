<?php

declare(strict_types=1);

namespace MailChecker;

interface CheckerInterface
{
    public function check(string $email): bool;
}
