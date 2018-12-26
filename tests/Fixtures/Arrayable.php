<?php

namespace Adelynx\APIResources\Tests\Fixtures;

interface Arrayable
{
    /**
     * Get the instance as an array.
     *
     * @param $request
     * @return array
     */
    public function toArray($request);
}
