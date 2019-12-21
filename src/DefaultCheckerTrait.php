<?php

declare(strict_types=1);

namespace MailChecker;

trait DefaultCheckerTrait
{
    public function checkEmail(string $email): bool
    {
        $checker = new Checker();
        $checker = new MxRecordChecker($checker);

        return $checker->check($email);
    }
}
