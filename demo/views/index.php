<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Notes By T</title>
    
</head>
<body>
  <header>

     <h1>Note App</h1>
        <?php require base_path('Http/controller/nav.controller.php');?>
    
     
  </header>

  <section id="welcome-section">
        <h1>
            Hello, <?= $_SESSION['user']['email']?? 'Guest' ?> 
        </h1>
    <h2>Welcome to the Note App</h2>
        <p>This app was built using PHP.</p>
            <p>
                Save, edit and perform neccessary crud operations with notes from this app, check it out by registering. 
            </p>`
  </section>
         <p>
            Built with best pratcices by <a href="https://github.com/Dev-Tams" target="_blank"> Tammy@Github</a>
        </p>`
  <script src="script.js"></script>
</body>
</html>
    


</html>
