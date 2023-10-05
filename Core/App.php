<?php
#This class serves as the main entry point for managing the application's container and dependencies

namespace Core;

class App
{
    # stores instance of the Container class.
    protected static Container $container;

    #Create container instance
    public static function setContainer(Container $container)
    {
        static::$container = $container;
    }

    #Returns the container instance.
    public static function container()
    {
        return static::$container;
    }

    # binds a key (dependency identifier) to a resolver (a callback or class name) in the container.
    public static function bind($key, $resolver)
    {
        static::container()->bind($key, $resolver);
    }

    #resolve (instantiate) a dependency by its key using the container.
    public static function resolve($key)
    {
        return static::container()->resolve($key);
    }
}