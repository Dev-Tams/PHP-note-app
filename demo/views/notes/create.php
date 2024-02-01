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
        <textarea
            id="body"
            name="header"
            cols="50"
            rows="8"
            placeholder="Here's an idea for a note..."><?= $_POST['header'] ?? '' ?></textarea>

                <?php if (isset($errors['header'])) : ?>
                    <p><small style="color:red; margin-top:0px;"><?= $errors['header'] ?></small></p>
                <?php endif; ?>
                
        <div>
            <input style="display:block; margin-left:100px; margin-top:12px; background-color:blue; width:15%; height:45px;" type="submit" value="submit">
        </div>

        <div>
            <a href="/notes"> cancel </a>
        </div>
</form>
</body>
</html>

<?php
