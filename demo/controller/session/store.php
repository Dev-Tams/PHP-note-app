<?php

use Core\App;
use Core\Database;
use Core\Validator;
// instantiate db

$db = App::resolve(Database::class);


$email =$_POST['email'];
$password = $_POST['password'];


//validate the inputs
$errors = [];

if( ! Validator::email($email)){
    $errors['email'] = 'please provide a valid email adress';
}

if(! Validator::input($password)){
    $errors['password'] = 'please provide valid password';
}


if(! empty($errors)){
    return view('session/create.php', [
        'errors' => $errors
    ]);
}

//match the  credentials

$user = $db->query('SELECT * FROM users WHERE email = :email',[
    'email' => $email
])->find();


// login user if credentials match
if($user){

    if(password_verify($password, $user[$password])){
        login([
            'email'=> $email
        ]);
        redirect('/');
    }

}


//else return an error statement
    return view('session/create.php', [
        'errors'=>[
            'email'=> 'Incorrect Email or Password'
        ]
    ]);



redirect('/');
