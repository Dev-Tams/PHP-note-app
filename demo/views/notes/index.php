<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Notes</title>
</head>
<body>


    <h1> Welcome to your notes</h1>

    
       
    <p>
        <ul>
            <?php foreach($notes as $note) :?>
                <li><a href="/note?id=<?= $note['id']?>">
                    <?=htmlspecialchars($note['header'])?>
                </li></a>
            <?php endforeach;?>
        </ul>
    
    </p>
       <p style="display: block; margin: 40px;"><a href="/note/create">Create Note</a></p>
</body>
</html>