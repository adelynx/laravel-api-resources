<?php

namespace adelynx\APIResources\Tests\Fixtures\Resources\Api\v2;

use adelynx\APIResources\Tests\Fixtures\Arrayable;
use Illuminate\Http\Resources\Json\Resource;

class Rank extends Resource implements Arrayable
{
    /**
     * @param $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'v' => 2
        ];
    }
}
