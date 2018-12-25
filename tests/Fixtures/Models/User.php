<?php

namespace adelynx\APIResources\Tests\Fixtures\Models;

use adelynx\APIResources\Tests\Fixtures\Arrayable;

class User implements Arrayable
{
  // Simulate Eloquent's dynamic attributes
  public $id = 1;
  public $name = 'Adel KEDJOUR';

  public function posts()
  {
    return [
      new Post()
    ];
  }

  public function rank()
  {
    return new Rank();
  }

  public function toArray($request)
  {
    return [
      'id' => $this->id,
      'name' => $this->name,
      'posts' => [
        new Post()
      ]
    ];
  }
}
