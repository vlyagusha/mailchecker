<?php

declare(strict_types=1);

trait DefaultCheckerTrait
{
    public function checkEmail(string $email): bool
    {
        $checker = new EmptyChecker();
        $checker = new RegexpChecker($checker);
        $checker = new MxRecordChecker($checker);

        return $checker->check($email);
    }
}
