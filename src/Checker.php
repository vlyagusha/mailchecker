<?php

declare(strict_types=1);

namespace MailChecker;

use MailCheckerException;

class Checker implements CheckerInterface
{
    /**
     * @param string $email
     * @throws MailCheckerException
     */
    public function check(string $email): void
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL, FILTER_FLAG_EMAIL_UNICODE) !== $email) {
            throw new MailCheckerException();
        }

        return;
    }
}
