<?php

namespace Http\Forms;

use Core\Validator;


namespace Http\Forms;
use Core\Validator;


class SignupForm{

    //validate the inputs

    protected $errors=[];

    public function validate($name, $email, $password)
    {
       


        if(! Validator::input($name)){
            $this->errors['name'] =' Name cannot be blank';
        }

        
        if (!Validator::email($email)) {
            $this->errors['email'] = 'please provide a valid email adress';
        }

        if (!Validator::input($password)) {
            $this->errors['password'] = 'please provide valid password';
        }

        return empty($this->errors);
      
        }

        public function errors(){
            return $this->errors;
        }

}
