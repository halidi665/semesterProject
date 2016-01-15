<?php
    session_start();
    require_once("./PHP/config.inc.php");
    require_once("./PHP/menu.php");
?>

<!doctype html>
<html lang="en">
<head>
    <?php
        createHtmlHead();
    ?>
    
    <title>Login | Lisa Hadinger</title>
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    
    <script type="text/javascript" src="JS/script.js"></script>
    
</head>
   
    
<body>
    <?php
       createTopMenu(); 
    ?>
    <div id="mainContainer" class="container" tabindex="-1">
        <h1>Welcome!</h1>
        <hr>
    
    <?php 
        //echo $_SESSION['user']; 

        //if (!isset($_SESSION['user']) ) { 
    ?>
        <div class="col-md-4 col-sm-8 col-xs-12">
            <h4>Please log in to access your project</h4>
            <form action="./PHP/login.php" method="POST">
                <label for="code">Enter your project code</label>
                <div class="input-group">
                    <span class="input-group-addon" id="step1">Step 1</span>
                    <input type="text" class="form-control" placeholder="enter your project code" aria-describedby="step1" name="code" id="code">
                </div>
                <label for="password">Enter your password</label>
                <div class="input-group">
                    <span class="input-group-addon" id="step2">Step 2</span>
                    <input type="password" class="form-control" placeholder="enter your password" aria-describedby="step2" name="password" id="password">
                </div>    
                   
                <input class="btn" type="submit" value="login">
            </form>
        
        <?php
              
            if ($_GET['logout']) {
                echo "<p>You have been logged out.</p>";
            }    
        
            if ($_GET['error'] == 1) {
                echo "<p class='alert-danger'>Wrong user name and  / or password</p>";
            }
        ?>
           
    
    <?php 
        //} 
    ?>
    
            </div>
    
        </div>
    <?php
        createFooter();
    ?>

</body>
</html>