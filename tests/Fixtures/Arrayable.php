<?php

namespace adelynx\APIResources\Tests\Fixtures;

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
