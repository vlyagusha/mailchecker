<?php

declare(strict_types=1);

namespace MailChecker;

abstract class CheckerDecorator implements CheckerInterface
{
    protected CheckerInterface $checker;

    public function __construct(CheckerInterface $checker)
    {
        $this->checker = $checker;
    }
}
