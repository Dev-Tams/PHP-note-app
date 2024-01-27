<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Notes By T</title>
    
</head>
<body>
    <?php require base_path('controller/nav.controller.php');?>
    <section>

        <h1>
            Hello, <?= $_SESSION['user']['name']?? 'Guest' ?> 
        </h1>

        <h3>
            Welcome to  Notes app <br>
             Powered by the world famous PHP <span>Server side scripting language</span>
        </h3>
        <p>
            save, edit and perform neccessary crud operations with notes from this app, check it out by registering. 
        </p>
    </section>

    <div>
        <p>
            Built by <a href="https://github.com/Dev-Tams" target="_blank"> Tammy@Github</a>
        </p>
    </div>
</body>

   
    


</html>
