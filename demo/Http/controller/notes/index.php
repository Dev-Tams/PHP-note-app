<?php

include '../Http/controller/nav.controller.php';

use Core\App;
use Core\Database;


// $email =$_POST['email'];
// $password = $_POST['password'];

// $_SESSION['user'] = [
//      'email'=> $user['email']
//  ];

//  session_regenerate_id(true);

$db = App::resolve(Database::class);


// $user = $db->query('SELECT * FROM users WHERE email = :email',[
//     'email' => $email
// ])->find();

$user = 1;
$query= "SELECT * from notes where user_id = {$user}";
$notes = $db->query($query)->get();

view('notes/index.php', [
     'notes' => $notes
] );

//require '../views/notes/index.php';




