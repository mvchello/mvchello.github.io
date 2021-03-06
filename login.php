<!DOCTYPE html>
<?php include('server.php') ?>
<html>
<head>
    <link href="login_stylesheet.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home: Welcome to Stay Afloat</title>
</head>

<body>
    
  <div class="topnavbar">
        
        <div class="topnav">
            <a href="http://localhost:8080/CSADMiniProject/login.php" >Home</a>
            <a href="http://localhost:8080/CSADMiniProject/about_page">About us</a>
            <a href="http://localhost:8080/CSADMiniProject/forum.php">Discussion Forum</a>
            
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
                    <div class="login-container">
                    <input type="text" placeholder="Username" name="username">
                    <input type="password" placeholder="Password" name="psw">
                    <button type="submit" name="login_user">Login</button>
                    <button type="button" onclick="register()">Register</button>
                    </div>
                </form>
                         
        </div> 
    </div>
            
        <script>
        function game()
        {
            location.replace("http://localhost:8080/CSADMiniProject/game.php")
        }
        function register() {
            location.replace("http://localhost:8080/CSADMiniProject/insert_register.php")
        }
        </script>
    
        <div style="padding-left:16px; text-align:center;">
            <h1>Welcome!</h1>
            <img src="review.JPG" alt="haha" onclick = "game()" width = 50% style=""/>
            <h2 style = "text-align:center;" > Click image to play now! </h2>
        </div>

    </div> 
    
 <footer class="footer-distributed">
        <img src="corgi.png" height="165">
        <div class="footer-left">
            <h3>Stay Afloat</h3>
            <span style="font-size: 14px; color: #CFB997;">My mind. My participation. </span><br><br>
                <span>Aim of our project:</span>
                <p>We hope to promote mind training as well as active online participation from our users!</p>
            <p class="footer-name">?? 2021 CSAD Mini Project <3</p>
        </div>

        <div class="footer-right">
            <p class="footer-about">
                <p class="footer-links">
                <a href="http://localhost:8080/CSADMiniProject/login.php">Home</a>
                |
                <a href="http://localhost:8080/CSADMiniProject/game.php">Game</a>
                |
                <a href="http://localhost:8080/CSADMiniProject/about_page.html">About us</a>
                |
                <a href="http://localhost:8080/CSADMiniProject/forum.php">Discussion Forum</a></p>
            <div>
                <i class="envelope"></i>
                <p>Contact us: <br>
                    <a href="mailto:anushka.19@ichat.sp.edu.sg">anushka.19@ichat.sp.edu.sg</a> |
                    <a href="mailto:yeoaugustine.19@ichat.sp.edu.sg">yeoaugustine.19@ichat.sp.edu.sg</a> |
                    <a href="mailto:hanyi.20@ichat.sp.edu.sg">hanyi.20@ichat.sp.edu.sg</a> |
                    <a href="mailto:michellemt.19@ichat.sp.edu.sg">michellemt.19@ichat.sp.edu.sg</a>
                </p>
            </div>
        </div>
    </footer>

</body>
</html>
