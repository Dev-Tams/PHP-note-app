<?php

use Core\Session;


const  BASE_PATH = __DIR__.'/../';

require BASE_PATH. 'vendor/autoload.php';

session_start();


require BASE_PATH.('Core/functions.php');

require base_path('Core/Router.php');
require base_path('boostrap.php');




$router = new \Core\Router();
$routes = require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);

Session::unflash();

//dd($users);

// foreach($users as $user){
//     echo "<li>".$user['id']. $user['users']."</li>";
// }


