<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/FE/css/login.css">
    <link rel="stylesheet" href="css/login.css">
    
    <link rel="stylesheet" href="css/sigin-style.css">
    <title>Login</title>
</head>
<body>
    <style>
    </style>
        <section class="header">
            <header>
                <h1> Log In</h1>
            </header>
            

        </section>

    
     
      
            </div>


                <form action="/login" method="POST">
                  

                <div class="name-email">
                        <label for="email">Email</label>
                            <span class="p-w">
                                <input type="text" name="email" id="email" placeholder=" Email address" value="<?= old('email')?>" autocomplete="on">
                            </span>
                                <?php  if(isset($errors['email'])) : ?>
                                    <p><small style="color: red;"><?= $errors['email'] ?></small></p>
                                <?php endif;?>
                </div>
                    
                
                <div class="password">
                    <label for="Password">Password</label>
                            <input type="password" name="password" id="password" minlength="6" placeholder=" Create a Password" autocomplete="on">
                                <?php if (isset($errors['password'])) : ?>
                                    <p><small style="color:red;"><?= $errors['password'] ?></small></p>
                                <?php endif; ?>
                </div>


                    
                <div class="submit">
                    <input type="submit" value="Login"  id="login">
                </div>
                
                </form>

            <aside>
                <p> By Signin in you agree to the <a href="/USER-AG">User agreement</a></p>
                <p> Dont have an account? <a href="/register">Signup</a></p>
            </aside>

    </div>
    
</body>

</html>