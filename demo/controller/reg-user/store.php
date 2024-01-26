<?php

use Core\App;
use Core\Database;
use Core\Validator;



App::resolve(Database::class);

$name = $_POST['name'];
$email =$_POST['email'];
$password = $_POST['password'];

//dd($email);
//dd($password);
// dd($name);

//validate the form inputs

$errors = [];

if(! Validator::input('name')){
    $errors['name'] =' Name cannot be blank';
}

if( ! Validator::email('email')){
    $errors['email'] = 'please provide a valid email adress';
}

if(! Validator::input('password', 7,255)){
    $errors['password'] = 'please provide a strong password';
}

if(! empty($errors)){
    return view('reg-user/create.php', [
        'errors' => $errors,
    ]);
}

//upon successful validation, checking if account exists

//if accounts exits, redirect...else


//...register user

// $db->query('INSERT INTO users(email, password, VALUES(:email, :password)', [
//     'email' => $_POST['email'],
//     'password' =>$_POST['password']
// ]);

