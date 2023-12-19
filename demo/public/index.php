<?php

const  BASE_PATH = __DIR__.'/../';



spl_autoload_register(function ($class){
      str_replace('\\','/', $class);

    require base_path($class .'.php');
});
require BASE_PATH.('Core/functions.php');
//require base_path ('Database.php');  
//require base_path('Response.php');
require base_path('Core/router.php');







//dd($users);

// foreach($users as $user){
//     echo "<li>".$user['id']. $user['users']."</li>";
// }


