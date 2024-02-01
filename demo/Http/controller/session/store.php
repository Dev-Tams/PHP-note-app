<?php

use Core\Authenticator;
use Core\Session;
use Http\Forms\validateForm;


// instantiate db



$email =$_POST['email'];
$password = $_POST['password'];


//validates form
$form = new validateForm();
if($form->validate($email, $password)){

   //if passes, continue to authorize login
     

   if ((new Authenticator)->attempt($email, $password)){
       redirect('/');
   }
    
    $form->error('email', 'Invalid Email address or Password');
   
     
}

Session::flash('errors', $form->errors());

Session::flash('old', [
    'email' => $_POST['email']
]);

return redirect('/login');

    


//else return an error statement
  







