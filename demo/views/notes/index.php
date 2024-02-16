<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="note.css">
    <title>Your Notes</title>
</head>
<body>

    <header>
        <h1> Note App</h1>
    </header>
  

<div id="notes-section">
       <h2> Welcome to your notes</h2>

     <div class="notes-list">

      <h3>Your Saved Notes</h3>
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

     </div>
</div>
      
</body>
</html>