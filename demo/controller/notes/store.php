<?php


use Core\App;
use Core\Database;

use Core\Validator;

require core('Validator.php');

$db = App::resolve(Database::class);







$error=[];
    

    if (Validator::text($_POST['header'])){
        $error['header']='this input is required';
    }
    if(Validator::maxinput($_POST['header'])){
        $error['header']="character is above 3500";
    }
    if(Validator::mininput($_POST['header'])){
        $error['header']='character is less than 10';
    }
    if(empty($error)){
    $db->query("INSERT INTO notes (header, user_id) VALUES( :header, :user_id)",[
        'header'=> $_POST['header'],
        'user_id' => 1
    ]);

    if(!empty($error)){

       return view('notes/show.php',
        ['note' => $note]);
        }

    header('location: /notes');
    die();
}
