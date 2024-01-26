<?php

use Core\App;
use Core\Validator;
use Core\Database;

$db = App::resolve(Database::class);
$errors = [];

if (! Validator::text($_POST['header'], 1, 1000)) {
    $errors['header'] = 'A body of no more than 1,000 characters is required.';
}

if (! empty($errors)) {
    return view("notes/create.php", [
        'errors' => $errors
        
    ]);
}

$db->query('INSERT INTO notes(header, user_id) VALUES(:header, :user_id)', [
    'header' => $_POST['header'],
    'user_id' => 1
]);

header('location: /notes');
die();
