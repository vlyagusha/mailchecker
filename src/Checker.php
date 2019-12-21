<?php

declare(strict_types=1);

namespace MailChecker;

class Checker implements CheckerInterface
{
    /**
     * @param string $email
     * @return array
     */
    public function check(string $email): array
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL, FILTER_FLAG_EMAIL_UNICODE) !== $email) {
            return ["Email $email is not valid"];
        }

        return [];
    }
}
