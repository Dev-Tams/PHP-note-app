<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/FE/css/login.css">
    <link rel="stylesheet" href="css/login.css">
    
    <link rel="stylesheet" href="css/sigin-style.css">
    <title>Signup</title>
</head>
<body>
    <style>
    </style>
        <section class="header">
            <header>
                <h1> Create Account</h1>
            </header>
            

        </section>
        <div class="container">
    
     
        <main class="style-container">
            <div class="label">
                <span class="em-style">Email</span>
                
                <span class="em-style">Phone</span>
            </div>
            <form action="/register" method="POST">
                <div class="name-email">
                    <span class="p-w">
                    <input type="text" name="email" id="email" placeholder=" Email address" autocomplete="on">
                    </span>
                    <div class="email-error">
                        <!--  -->
                    </div>
                    
                </div>

                <div class="password">

                    <span class="p-w">
                        <input type="password" name="pass" id="password" minlength="6" placeholder=" Create a Password" autocomplete="on">
                        <span class="icon delete" title="clear Password"></span>
                        <span class="icon reveal" title="show password"></span>
                    </span>
                    <div class="pass-error"></div>
                    
                </div>
                
                
                <div class="submit">
                    <input type="submit" value="Signup"  id="login">
                    <span id="rotate"></span>
                </div>
            </form>

            <aside>
                <p> By creating an account you agree to the <a href="/USER-AG">User agreement</a></p>
                <p> Already have an account? <a href="/">Login</a></p>
            </aside>

    </div>
    
</body>

</html>