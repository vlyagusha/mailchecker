<?php

declare(strict_types=1);

namespace MailChecker;

use MailCheckerException;

class MxRecordChecker extends CheckerDecorator
{
    /**
     * @param string $email
     * @throws MailCheckerException
     */
    public function check(string $email): void
    {
        $this->checker->check($email);
        $this->checkMxRecord($email);

        return;
    }

    /**
     * @param string $email
     * @throws MailCheckerException
     */
    private function checkMxRecord(string $email): void
    {
        list(, $host) = explode('@', $email);
        if (!checkdnsrr($host, 'MX')) {
            throw new \MailCheckerMxRecordException('');
        }

        return;
    }
}
