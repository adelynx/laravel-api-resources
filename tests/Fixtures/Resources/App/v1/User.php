<?php

namespace Adelynx\APIResources\Tests\Fixtures\Resources\App\v1;

use Adelynx\APIResources\Tests\Fixtures\Arrayable;
use Illuminate\Http\Resources\Json\Resource;

class User extends Resource implements Arrayable
{
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
