<?php

require '../controller/nav.controller.php';

$config = require ref_path(('config.php'));
$db = new Database($config["Database"]);



$query= "SELECT * from notes where user_id = 1";
$notes = $db->query($query)->get();

 view('notes/index.php', [
    'notes' => $notes
] );

//require '../views/notes/index.php';




