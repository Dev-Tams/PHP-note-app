<?php

use Core\Session;

view("session/create.php", [
 
    'errors' => Session::get('errors')

  
]);