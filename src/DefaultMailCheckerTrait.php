<?php

declare(strict_types=1);

namespace MailChecker;

use MailCheckerException;

trait DefaultMailCheckerTrait
{
    /**
     * @param string $email
     * @throws MailCheckerException
     */
    public function checkEmail(string $email): void
    {
        $checker = new Checker();
        $checker = new MxRecordChecker($checker);
        $checker->check($email);

        return;
    }
}
