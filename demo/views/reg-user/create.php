<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/FE/css/login.css">
    <link rel="stylesheet" href="css/login.css">
    
    <link rel="stylesheet" href="form.css">
    <title>Signup</title>
</head>
<body>
    <style>
    </style>
        <section id="header">
            <header>
                <h1> Create Account</h1>
            </header>
            

        </section>

    
     
      
           
                <div id="form">

                   
                <form action="/register" method="POST">
                    <div class="name">
                        <label for="name">Name</label>
                            <input type="text" name="name" id="name" placeholder=" Name cannot be blank" value="<?= $_POST['name'] ?? '' ?>">
                                <?php  if(isset($errors['name'])) : ?>
                                    <p><small style="color: red;"><?= $errors['name'] ?></small></p>
                                 <?php endif;?>
                    </div><br>

               
                <div class="name-email">
                        <label for="email">Email</label>
                            <span class="p-w">
                                <input type="text" name="email" id="email" placeholder=" Email address" autocomplete="on" value="<?= $_POST['email'] ?? '' ?>">
                            </span>
                                <?php  if(isset($errors['email'])) : ?>
                                    <p><small style="color: red;"><?= $errors['email'] ?></small></p>
                                <?php endif;?>
                </div>
                    
                
                <div class="password">
                    <label for="Password">Password</label>
                            <input type="password" name="password" id="password" minlength="6" placeholder=" Create a Password" autocomplete="on" value="<?= $_POST['password'] ?? '' ?>">
                                <?php if (isset($errors['password'])) : ?>
                                    <p><small style="color:red;"><?= $errors['password'] ?></small></p>
                                <?php endif; ?>
                </div>


                    
               <button> Signup</button>
                
                </form>

             </div> 
                

            <aside>
                <p> By creating an account you agree to the <a href="/USER-AG">User agreement</a></p>
                <p> Already have an account? <a href="/login">Login</a></p>
            </aside>

    </div>
    
</body>

</html>