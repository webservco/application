<?php

declare(strict_types=1);

namespace WebServCo\Application\Contract;

interface ApplicationRunnerInterface
{
    public function run(): bool;
}
