<?php

declare(strict_types=1);

namespace MailChecker;

class MxRecordChecker extends CheckerDecorator
{
    public function check(string $email): array
    {
        if (!$this->checkMxRecord($email)) {
            return array_merge($this->checker->check($email), ["Email $email has invalid MX record"]);
        }

        return [];
    }

    private function checkMxRecord(string $email): bool
    {
        list(, $host) = explode('@', $email);

        return checkdnsrr($host, 'MX');
    }
}
