<?php

declare(strict_types=1);

namespace WebServCo\Application\Contract;

interface ApplicationInterface
{
    public function bootstrap(): bool;

    public function run(): bool;

    public function shutdown(): bool;
}
