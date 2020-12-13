<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="css/signup.css">
    <script defer src="js/signup.js"></script>
</head>
<body>
    <div class="hero-bg">
        <section class="section1">
            <header>
                <nav>
                    <ul>
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="login.php">LOGIN</a></li>
                        <li><a href="top10.html">TOP 10s</a></li>
                        <li><a href="products.html">PRODUCTS</a></li>
                        <li><a href="about.html">ABOUT US</a></li>
                        <li><a href="user.php">USER</a></li>
                    </ul>
                </nav>
            </header>
            <div class="form-container">
                <form id="signupform" action="signup.php" method="POST">
                    <label for="signup">SIGNUP</label>
                    <input type="text"  name="username" id="name" placeholder="Enter your Username...">
                    <div class="errorx" id='nameerror'><?php echo($sign_uerror);?></div>
                    <input type="text"  name="email" id="email" placeholder="Enter your Email...">                    
                    <div class="errorx" id='emailerror'><?php echo($sign_perror);?></div>
                    <input type="password"  name="password_1" id="password" placeholder="Enter your Password...">
                    <div class="errorx" id='passerror'></div>
                    <input type="password"  name="password_2" id="confirmpassword" placeholder="Enter your Password again...">
                    <div class="errorx" id='cpasserror'></div>
                    <input type="submit" name="reg_user" value="SUBMIT">
                    <a href="login.php"><p>Already Have an Account? Click here to Login!</p></a>
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