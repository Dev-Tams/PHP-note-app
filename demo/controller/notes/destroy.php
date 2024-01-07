<?php
use Core\App;
use Core\Database;



$db = App::resolve(Database::class);



$currentuser=2;

$note = $db->query ("SELECT * FROM notes WHERE id = :id" ,
[
 'id' => $_POST['id']
 ])->findorfail();



 authorize($note['user_id']==$currentuser);

   if($currentuser=='user_id'){
    $db->query(" DELETE FROM notes WHERE id =:id", [
        'id' => $_POST['id']
    ]);

   } 
    


    header('location: /notes');
    exit();
   
