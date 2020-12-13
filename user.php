<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
      
      $_SESSION['msg'] = "You must log in first";      
        // header('location: login.php');
        echo "<script> alert('You must log in first!!'); window.location.href='login.php'; </script>";
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <link rel="stylesheet" href="css/user.css">
    <script defer src="js/loginx.js"></script>
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
        </section>
        <div class="userinfo">
        <img src="images/icons/user.png" alt="">
        <h1><?php echo($_SESSION['username']);?></h1>
        <a href="user.php?logout='1'"><button type="button" >LOGOUT</button></a>
    </div>
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