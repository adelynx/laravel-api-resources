<?php

namespace adelynx\APIResources\Tests\Fixtures\Resources\App\v2;

use adelynx\APIResources\Tests\Fixtures\Arrayable;
use Illuminate\Http\Resources\Json\Resource;

class Rank extends Resource implements Arrayable
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'v' => 2
        ];
    }
}
