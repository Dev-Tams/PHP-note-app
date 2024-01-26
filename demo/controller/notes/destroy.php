<?php
use Core\App;
use Core\Database;



$db = App::resolve(Database::class);



$currentuser=1;

$note = $db->query ("SELECT * FROM notes WHERE id = :id" ,
[
 'id' => $_POST['id']
 ])->findorfail();



 authorize($note['user_id']==$currentuser);

    $db->query(" DELETE FROM notes WHERE id =:id", [
        'id' => $_POST['id'],
    ]);

    


    header('location: /notes');
    exit();
   
