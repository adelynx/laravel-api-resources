<?php

namespace Adelynx\APIResources\Tests;

use Adelynx\APIResources\Facades\APIResource as APIResourceFacade;

class APIResourceCollectionTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        // Reset config on each request
        config(['api' => require __DIR__ . '/Fixtures/config/simple.php']);
    }


    public function test_simple_resource_with_collection()
    {
        $users = collect([new Fixtures\Models\User(), new Fixtures\Models\User()]);

        APIResourceFacade::setVersion('2');
        $resource = api_resource('App\User')->collection($users);

        $this->assertResourceArray($resource, ['data' => [
            [
                'id' => 1,
                'name' => 'Adel KEDJOUR',
                'rank' => [
                    'id' => 1,
                    'name' => 'Erica KEDJOUR',
                    'v' => 2
                ],
                'v' => 2,
            ], [
                'id' => 1,
                'name' => 'Adel KEDJOUR',
                'rank' => [
                    'id' => 1,
                    'name' => 'Erica KEDJOUR',
                    'v' => 2
                ],
                'v' => 2,
            ],
        ]]);
    }

    public function test_collection_resource()
    {
        $users = collect([new Fixtures\Models\User(), new Fixtures\Models\User()]);

        APIResourceFacade::setVersion('2');

        $asd = 'random';

        $resource = api_resource('App\Users')
            ->make($users)
            ->setAsd($asd);

        $this->assertResourceArray($resource, ['data' => [
            [
                'id' => 1,
                'name' => 'Adel KEDJOUR',
                'rank' => [
                    'id' => 1,
                    'name' => 'Erica KEDJOUR',
                    'v' => 2
                ],
                'v' => 2,
            ], [
                'id' => 1,
                'name' => 'Adel KEDJOUR',
                'rank' => [
                    'id' => 1,
                    'name' => 'Erica KEDJOUR',
                    'v' => 2
                ],
                'v' => 2,
            ],
        ],
            'asd' => $asd
        ]);
    }
}
