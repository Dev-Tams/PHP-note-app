<?php
use Core\App;
use Core\Database;



$db = App::resolve(Database::class);
 

$currentuser=2;


$note = $db->query ("SELECT * FROM notes WHERE id = :id" ,
[
 'id' =>$_GET['id']
 ])->findorfail();



 authorize($note['user_id']==$currentuser);


 view('notes/show.php',
['note' => $note]);

