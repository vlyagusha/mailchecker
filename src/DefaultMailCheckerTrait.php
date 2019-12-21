<?php

declare(strict_types=1);

namespace MailChecker;

trait DefaultMailCheckerTrait
{
    public function checkEmail(string $email): array
    {
        $checker = new Checker();
        $checker = new MxRecordChecker($checker);

        return $checker->check($email);
    }
}
