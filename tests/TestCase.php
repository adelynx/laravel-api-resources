<?php

namespace Adelynx\APIResources\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Adelynx\APIResources\APIResourcesServiceProvider;

abstract class TestCase extends BaseTestCase
{
    /**
     * @param $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [APIResourcesServiceProvider::class];
    }

    /**
     * @param $resource
     * @param $array
     */
    protected function assertResourceArray($resource, $array)
    {
        $arr = json_encode($array);
        $this->assertAttributeEquals($arr, 'data', $resource->response());
    }
}
