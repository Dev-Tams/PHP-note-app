<?php
use Core\Database;
$config = require base_path('config.php');


$db = new Database($config["Database"]);
 

$currentuser=1;


$note = $db->query ("SELECT * FROM notes WHERE id = :id" ,
[
 'id' =>$_GET['id']
 ])->findorfail();



 authorize($note['user_id']==$currentuser);


 view('notes/show.php',
['note' => $note]);

