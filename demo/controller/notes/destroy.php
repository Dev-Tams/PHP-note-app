<?php
use Core\Database;

$config = require ref_path('config.php');
$db = new Database($config["Database"]);



$currentuser =1;

$note = $db->query ("SELECT * FROM notes WHERE id = :id" ,
[
 'id' => $_POST['id']
 ])->findorfail();



 authorize($note['user_id']==$currentuser);

    
    $db->query(" delete notes from where user id =:id", [
        'id' => $_POST['id']
    ]);


    header('location: /notes');
    exit();
   
