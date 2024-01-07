<?php

require '../controller/nav.controller.php';

use Core\App;
use Core\Database;



$db = App::resolve(Database::class);


$query= "SELECT * from notes where user_id = 2";
$notes = $db->query($query)->get();

 view('notes/index.php', [
    'notes' => $notes
] );

//require '../views/notes/index.php';




