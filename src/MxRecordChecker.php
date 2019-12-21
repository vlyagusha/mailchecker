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
        if (strpos($email, '@') === false) {
            return false;
        }

        list(, $host) = explode('@', $email);
        $mxRecords = [];
        $mxWeight = [];
        $result = getmxrr($host, $mxRecords, $mxWeight);
        if ($result && $this->isMxRecordsValid($mxRecords)) {
            return true;
        }

        return false;
    }

    private function isMxRecordsValid(array $mxRecord): bool
    {
        return count($mxRecord) > 0 && $mxRecord[0] !== null && $mxRecord[0] !== '0.0.0.0';
    }
}
