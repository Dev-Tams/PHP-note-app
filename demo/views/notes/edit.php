<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE-NOTE</title>
</head>
<body>
    


<style>
    body{
        margin-top: 40px;
        margin-left: 30px;
    }
    div{
        display: flex;
        justify-content: space-between;
        width: 30px;
        border: 12px;
        margin: 20px 40px 0px 20px;
    }
    a.ed{
        margin-right:20px;
    }
</style>

<form method="post" action="/note">
<input type="hidden" name="_method" value="PATCH">
    <input type="hidden" name="id" value=" <?= $note['id']?>" >

    
<label for="create" bg-color:red;>Edit</label>
    <textarea  
      name="header" id="create" ><?= $note['header'] ?></textarea>
    <?php if(isset($error['header'])):?>
        <small style="color:red;"> <?= $error['header']?></small> 
        <?php endif;?>

    <div>
    <a href="/notes" class="ed" >Cancel</a>
    <input type="submit" value="Update">
    </div>
       
</form>
</body>
</html>

<?php
