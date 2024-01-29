<?php
use Core\App;
use Core\Database;



$db = App::resolve(Database::class);



$user=1;
 $db->query ("SELECT * FROM notes WHERE id = :id" ,
[
 'id' => $_POST['id']
 ])->findorfail();




 authorize($note['user_id']=$user);
  $db->query(" DELETE FROM notes WHERE id =:id", [
        'id' => $_POST['id'],
    ]);

    

redirect('/');
   
