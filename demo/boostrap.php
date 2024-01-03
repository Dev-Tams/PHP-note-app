<?php


use Core\Container;
use Core\App;
use Core\Database;


$container = new Container();

$container->bind('Core\Database', function(){

    $config = require ref_path('config.php');

    return new Database($config["Database"]);


});


App::setcontainer($container);