<?php

declare(strict_types=1);

namespace MailChecker;

use MailCheckerException;

interface CheckerInterface
{
    /**
     * @param string $email
     * @throws MailCheckerException
     */
    public function check(string $email): void;
}
