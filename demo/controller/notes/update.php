<?php


use Core\App;
use Core\Database;
use Core\Validator;



$db = App::resolve(Database::class);
 

$currentuser=12222;

//first display the note selected 
$note = $db->query ("SELECT * FROM notes WHERE id = :id" ,
[
 'id' =>$_POST['id']
 ])->findorfail();


 //then authorixe if the user has access
 
 authorize($note['user_id']=$currentuser);

 //validate the form input
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

 //finally if validated update the database and die the session

 if(count($error)){
    return view('note/edit.php', [
        'error' => $error,
        'note' => $note
    ]);
 }

 $db->query(" UPDATE notes set header = :header where id = :id", [
    'id'=> $_POST['id'],
    'header' => $_POST['header']
 ]);

 header('location: /notes');
  die();