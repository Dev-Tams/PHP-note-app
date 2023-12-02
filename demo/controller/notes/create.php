<?php
require core('Validator.php');



$config = require ref_path('config.php');
$db = new Database($config["Database"]);
require '../controller/nav.controller.php';



$error=[];

if($_SERVER['REQUEST_METHOD']=="POST"){
    

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
}
}

view('notes/create.php', ['error' => $error]);

