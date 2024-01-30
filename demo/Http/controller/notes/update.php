<?php


use Core\App;
use Core\Database;
use Core\Validator;


//dd($_SERVER);
$db = App::resolve(Database::class);
 

$user=1;

//first display the note selected 
$note = $db->query ("SELECT * FROM notes WHERE id = :id" ,
[
 'id' =>$_POST['id']
 ])->findorfail();


 //then authorixe if the user has access
 
 authorize($note['user_id']==$user);

 //validate the form input
 $errors=[];


 if (!Validator::text($_POST['header'])){
     $errors['header']='this input is required';
 }
 if(!Validator::input($_POST['header'], 1,3500)){
     $errors['header']="character is above 3500";
 }
 if(!Validator::minput($_POST['header'])){
     $errors['header']='Share something';
 }

 //finally if validated update the database and die the session

 if(count($errors)){
    return view('notes/edit.php', [
        'errors' => $errors,
        'note' => $note
    ]);
 }

 $db->query(" UPDATE notes set header = :header where id = :id", [
    'id'=> $_POST['id'],
    'header' => $_POST['header']
 ]);

redirect('/');

