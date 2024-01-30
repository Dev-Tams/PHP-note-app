<?php

use Core\App;
use Core\Database;



$db = App::resolve(Database::class);
 


$user=1;




$note = $db->query ("SELECT * FROM notes WHERE id = :id" ,
[
 'id' =>$_GET['id']
 ])->findorfail();

 authorize($note['user_id']==$user);
 
view('notes/edit.php',
 ['error' => [],
 'note'=>$note
]);

