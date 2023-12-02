<?php

const  BASE_PATH = __DIR__.'/../';

spl_autoload_register(function ($class){
    require core($class .'.php');
});
require BASE_PATH.('functions.php');
//require base_path ('Database.php');  
//require base_path('Response.php');
require base_path('router.php');







//dd($users);

// foreach($users as $user){
//     echo "<li>".$user['id']. $user['users']."</li>";
// }


