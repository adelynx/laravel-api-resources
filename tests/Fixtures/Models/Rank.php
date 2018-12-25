<?php

namespace adelynx\APIResources\Tests\Fixtures\Models;

use adelynx\APIResources\Tests\Fixtures\Arrayable;

class Rank implements Arrayable
{
  // Simulate Eloquent's dynamic attributes
  public $id = 1;
  public $name = 'Erica KEDJOUR';

  public function toArray($request)
  {
    return [
      'id' => $this->id,
      'name' => $this->name
    ];
  }
}
