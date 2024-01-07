<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Note</title>
</head>
<body>


    <h1> NOTE</h1>
    <a href="/notes" class="text-blue-600 hover:underline"> Go back</a>
    <p>  <?= htmlspecialchars($note['header'])?></p>


    <form action="/note" method="post">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="id" value=" <?= $note['id']?>" >
        <button style="color: red;"> Delete</button>
       
    </form>
   
</body>
</html>