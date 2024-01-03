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
</style>
<form method="post" action="/notes">
<label for="create" bg-color:red;>Descripion</label>
    <textarea placeholder="write here!"
     style="display: block; color:black;" 
      name="header" id="create" 
      cols="30" rows="10">
      <?= $_POST['header'] ?? "" ?>
    </textarea>
    <?php if(isset($error['header'])):?>
        <small style="color:red;"> <?= $error['header']?></small> 
        <?php endif;?>
    <input style="display:block; margin-left:100px; margin-top:12px; background-color:blue; width:15%; height:45px;" type="submit" value="submit">
</form>
</body>
</html>

<?php
