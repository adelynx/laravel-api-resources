<?php

namespace Adelynx\APIResources\Tests\Fixtures\Models;

use Adelynx\APIResources\Tests\Fixtures\Arrayable;

class Post implements Arrayable
{
    // Simulate Eloquent's dynamic attributes
    public $id = 2;
    public $title = 'Quia autem ea commodi quis.';
    public $body = 'At ipsam qui eum corrupti consequatur. Culpa qui facere doloremque mollitia iusto eum eos. Nisi et modi qui in odio recusandae perferendis. Odio ducimus quasi consequatur consectetur sint. Tenetur nisi nam non temporibus maiores maiores.';

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body
        ];
    }
}
