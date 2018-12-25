<?php

namespace adelynx\APIResources\Tests\Fixtures\Resources\Api\v1;

use adelynx\APIResources\Tests\Fixtures\Arrayable;
use Illuminate\Http\Resources\Json\Resource;

class User extends Resource implements Arrayable
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
            'rank' => api_resource('App\Rank')->make($this->rank()),
            'v' => 1
        ];
    }
}
