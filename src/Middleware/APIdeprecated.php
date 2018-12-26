<?php

namespace Adelynx\APIResources\Middleware;

use Adelynx\APIResources\Exceptions\APIDeprecatedException;

class APIdeprecated
{
    /**
     * Deprecate all incoming requests.
     *
     * @return mixed
     * @throws APIDeprecatedException
     */
    public function handle()
    {
        throw new APIDeprecatedException();
    }
}
