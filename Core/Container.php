<?php

namespace Core;

use Exception;

class Container
{
    protected $bindings = [];

  # Add a binding to the container. It associates a key (dependency identifier(class)) with a resolver (a callback or class name).
    public function bind($key, $resolver)
    {
        $this->bindings[$key] = $resolver;
    }

    # retrieve and instantiate a dependency by its key
    public function resolve($key)
    {
        if (!array_key_exists($key, $this->bindings)) {
            throw new Exception("No matching binding found for {$key}");
        }

        $resolver = $this->bindings[$key];

        return call_user_func($resolver);
    }
}