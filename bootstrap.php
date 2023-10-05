<?php

use Core\App;
use Core\Container;
use Core\Database;

#create new Container object which will be available throughout the application
$container = new Container();

#Add classes that has to be loaded in the container
$container->bind('Core\Database', function () {
    $config = require base_path('config.php');

    return new Database($config['database']);
});

#set the container up
App::setContainer($container);