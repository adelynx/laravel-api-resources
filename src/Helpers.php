<?php

use Adelynx\APIResources\Facades\APIResource;

if (!function_exists('api_resource')) {
    /**
     * Returns a resource resolver
     *
     * @param string $classname
     *
     * @return \Adelynx\APIResources\APIResource
     */
    function api_resource($classname)
    {
        return APIResource::resolve($classname);
    }
}
