<?php

namespace adelynx\APIResources\Exceptions;

class ResourceNotFoundException extends \Exception
{
    /**
     * Create a new exception instance
     * @param $classname
     * @param $path
     */
    public function __construct($classname, $path)
    {
        parent::__construct("The resource $classname was not found. Path: $path");
    }
}
