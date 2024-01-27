<?php

use Core\App;
use Core\Database;
use Core\Validator;




$name = $_POST['name'];
$email =$_POST['email'];
$password = $_POST['password'];

//dd($email);
//dd($password);
// dd($name);

//validate the form inputs

$errors = [];

if(! Validator::input($name)){
    $errors['name'] =' Name cannot be blank';
}

if( ! Validator::email($email)){
    $errors['email'] = 'please provide a valid email adress';
}

if(! Validator::input($password, 7,255)){
    $errors['password'] = 'please provide a strong password';
}

if(! empty($errors)){
    return view('reg-user/create.php', [
        'errors' => $errors,
    ]);
}

//upon successful validation, checking if account exists


$db = App::resolve(Database::class);

$user = $db->query('SELECT * FROM users WHERE email = :email',[
    'email' => $email
])->find();


//if accounts exits, redirect...

if($user){
    echo "user already exist";
    header('location: /login');
    exit();
}else{
    //...else register user

    $db->query('INSERT INTO users(name, email, password) VALUES(:name, :email, :password)', [
    'name' => $name,
    'email' => $email,
    'password' => password_hash($password, PASSWORD_BCRYPT)
]);
}

//upon success, log in
$_SESSION['user'] = [
    'name'=> $name
];

header('location: /');
exit();