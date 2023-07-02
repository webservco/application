<?php

declare(strict_types=1);

namespace WebServCo\Application\Contract;

use Psr\Http\Message\ServerRequestInterface;

interface ApplicationRunnerFactoryInterface
{
    public function createApplicationRunner(ServerRequestInterface $serverRequest): ApplicationRunnerInterface;
}
