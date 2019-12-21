<?php

declare(strict_types=1);

interface CheckerInterface
{
    public function check(string $email): bool;
}
