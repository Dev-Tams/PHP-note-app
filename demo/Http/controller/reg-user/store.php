<?php

use Core\App;
use Core\Database;
use Core\Validator;
use Http\Forms\SignupForm;

$name = $_POST['name'];
$email =$_POST['email'];
$password = $_POST['password'];

//dd($email);
//dd($password);
// dd($name);

//validate the form inputs

//Class validate form has been creaed to handle form validations on Forms Directory
$form = new SignupForm($name, $email, $password);


//if validations fail

if(! $form->Validate($name, $email, $password)){
    return view('reg-user/create.php', [
        'errors' => $form->errors()
    ]);
}

//upon successful validation, checking if account with same email exists




$db = App::resolve(Database::class);

$user = $db->query('SELECT * FROM users WHERE email = :email',[
    'email' => $email
])->find();


//if accounts exits, redirect...

if($user){
    return view('reg-user/create.php', [
        'errors' => [
            'email'=> 'User account already exists.'
        ]
        ]);
   
}else{
    //...else register user

    $db->query('INSERT INTO users(name, email, password) VALUES(:name, :email, :password)', [
    'name' => $name,
    'email' => $email,
    'password' => password_hash($password, PASSWORD_BCRYPT)
]);
}

//upon success, log in
login([
    'name' => $name
]);
redirect('/notes');