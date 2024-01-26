<?php


use Core\App;
use Core\Database;
use Core\Validator;


//dd($_SERVER);
$db = App::resolve(Database::class);
 

$currentuser=1;

//first display the note selected 
$note = $db->query ("SELECT * FROM notes WHERE id = :id" ,
[
 'id' =>$_POST['id']
 ])->findorfail();


 //then authorixe if the user has access
 
 authorize($note['user_id']=$currentuser);

 //validate the form input
 $errors=[];


 if (!Validator::text($_POST['header'])){
     $errors['header']='this input is required';
 }
 if(!Validator::maxinput($_POST['header'])){
     $errors['header']="character is above 3500";
 }
 if(!Validator::mininput($_POST['header'])){
     $errors['header']='character is less than 10';
 }

 //finally if validated update the database and die the session

 if(!count($errors)){
    return view('notes/edit.php', [
        'errors' => $errors,
        'note' => $note
    ]);
 }

 $db->query(" UPDATE notes set header = :header where id = :id", [
    'id'=> $_POST['id'],
    'header' => $_POST['header']
 ]);

 header('location: /notes');
  die();