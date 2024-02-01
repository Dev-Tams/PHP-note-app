<?php

namespace Core;

class Authenticator
{
    public function attempt($email, $password)
    {

        //find user credentials
        $user = App::resolve(Database::class)->query('SELECT * FROM users WHERE email = :email', [
            'email' => $email
        ])->find();




        // verify user credentials
        if($user){
        if(password_verify($password, $user['password'])){
           $this-> login([
                'email'=> $email
            ]);
            return true;
        }
    }
    return false;
    }

    public function login($user){
        $_SESSION['user'] = [
            'email'=> $user['email']
        ];
    
        session_regenerate_id(true);
    }
    function redirect($path){
        header("location: {$path}");
        exit();
    }
    
    
    public function logout(){
    Session::destroy();
    }

}

