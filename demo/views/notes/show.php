<!DOCTYPE html>
<html lang="en">
<head>

<style>
    div{
        display: flex;
        justify-content: space-between;
        width: 30px;
        border: 12px;
        margin: 20px 40px 0px 20px;
    }
    a{
        margin-right:20px;
    }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Note</title>
</head>
<body>


    <h1> NOTE</h1>
    <a href="/notes" class="text-blue-600 hover:underline"> Go back</a>
    <p>  <?= htmlspecialchars($note['header'])?></p>


    <div>
    <a href="/note/edit?id=<?= $note['id']?>" target="_parent"> Edit</a>


<form action="/note" method="post">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="id" value=" <?= $note['id']?>" >
    <button style="color: red; display:flex;"> Delete</button>
   
</form>

    </div>
    
   
</body>
</html> 