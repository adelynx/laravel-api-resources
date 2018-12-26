<?php

namespace Adelynx\APIResources\Tests\Fixtures\Resources\Api\v2;

use Adelynx\APIResources\Tests\Fixtures\Arrayable;
use Illuminate\Http\Resources\Json\Resource;

class Post extends Resource implements Arrayable
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title
        ];
    }
}
