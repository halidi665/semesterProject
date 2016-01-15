<?php
    require_once('./PHP/menu.php');
?>
<!doctype html>
<html lang="en">
<head>
     <?php
        createHtmlHead();
    ?>
    <title>about | Lisa Hadinger</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    
    <script type="text/javascript" src="JS/script.js"></script>
      
    
    
</head>
    
<body>
    
    <?
        createTopMenu();
    ?>
    
    <div id="mainContainer" class="container" tabindex="-1">

        <div class="row">
            <div class="col-md-12 col-xs-12">
                <h1 class="specialh1"><i class="fa fa-user"></i> ABOUT</h1>
                <h2 class="specialh2">Long story short...</h2>
            </div>
        </div>       
            
        <div class="row">
            <div class="col-md-5 col-sm-4 col-xs-12">
                <img id="profile-pic" class="img-responsive" src="img/profile-pic.png" alt="Portrait: Lisa Hadinger">
            </div>
            <div class="col-md-6 col-sm-7 col-xs-12">
                <p>My name is Lisa Hadinger; I was born and raised in Upper Austria and have been living in Vienna since 2007. </p>
                <p>I graduated from the university of Vienna in 2012 and started working in the field of adult education. Additionally, I started to teach myself how to code and soon ended up publishing my <a class="speciallink" href="http://scout.tb-hadinger.at" target="_blank" title="Scout Hangbeurteilungssystem">first hand-coded website</a>.</p>
                <p>In 2014 I enrolled at the University of Applied Sciences St. Pölten / Austria for a bachelor's degree in media technology.</p>
                <p>I have not only done <a class="speciallink" href="web.html">web projects</a> ever since, but I also did a few <a class="speciallink" href="other-projects.html">video and gaming projects</a> (some of which are works in progress).
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-xs-12">
                <h2 class="specialh2">Fields of Interest</h2>
                <p class="center">web design, e-learning solutions, serious gaming, gamification, photography</p>
            </div>
            <div class="col-md-6 col-xs-12">
                <h2 class="specialh2">Contact me!</h2>
                <p class="center">
                    <a class="speciallink" href="mailto:hello@lisahadinger.at" title="send an e-mail"><i class="fa fa-envelope"></i>&nbsp;hello@lisahadinger.at</a>
                </p>
            </div>

        </div>

    </div> 
    
    
    
    
    
    <?php
        createFooter();
    ?>
          
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
</body>
</html>