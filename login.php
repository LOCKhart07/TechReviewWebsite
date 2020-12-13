<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <script defer src="js/loginx.js"></script>
</head>
<body>
    <div class="hero-bg">
        <section class="section1">
            <header>
                <nav>
                    <ul>
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="#">LOGIN</a></li>
                        <li><a href="top10.html">TOP 10s</a></li>
                        <li><a href="products.html">PRODUCTS</a></li>
                        <li><a href="about.html">ABOUT US</a></li>
                        <li><a href="user.php">USER</a></li>
                    </ul>
                </nav>
            </header>
            <div class="form-container">
                <form id="loginform" method="POST" action="login.php">
                    
                    <label for="login">LOGIN</label>
                    <input type="text" name="username" id="username"  placeholder="Enter your username...">
                    <div class="errorx" id='usererror'></div>
                    <input type="password" name="password" id="password"  placeholder="Enter your Password...">
                    <div class="errorx" id='passerror'><b><?php echo($login_perror);?></b></div>
                    <input type="submit" value="SUBMIT" name="login_user" id="login_user">
                    <a href="signup.php"><p>New here? Click here to register</p></a>
                </form>
            </div>            
        </section>
    </div>

    <div class="section6">
        <h4>FOLLOW US ON</h4>
        <div id='icon-wrapper'>
            <div id="social">
                <div class="twitter">
                    <a href="https://twitter.com" target="_blank" rel="noopener noreferrer"><img src="images/icons/twitter.png" alt=""></a>
                </div>
                <div class="facebook">
                    <a href="https://facebook.com" target="_blank" rel="noopener noreferrer"><img src="images/icons/facebookx.png" alt=""></a>
                </div>
                <div class="linkedin">
                    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer"><img src="images/icons/linkedin.png" alt=""></a>
                </div>
                <div class="google">
                    <a href="https://instagram.com" target="_blank" rel="noopener noreferrer"><img src="images/icons/instagram.png" alt=""></a>
                </div>
            </div>
        </div>
                
        
        <hr>
        <h6>©️2020 TECHNAGO,ALL RIGHTS RESERVED</h6>

    </div>
    
</body>
</html>