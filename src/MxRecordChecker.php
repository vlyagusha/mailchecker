<?php

declare(strict_types=1);

class MxRecordChecker extends CheckerDecorator
{
    public function check(string $email): bool
    {
        return $this->checker->check($email) && $this->checkMxRecord($email);
    }

    private function checkMxRecord(string $email): bool
    {
        //todo
        return true;
    }
}
