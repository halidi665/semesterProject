<?php
    require_once('./PHP/menu.php');
?>
<!doctype html>
<html lang="en">
<head>
    
    <title>other projects | Lisa Hadinger</title>
    
    <?php
        createHtmlHead();
    ?>  
    
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
    

        <div class="row">
            <div class="col-md-12 col-xs-12">
                <h1 class="specialh1"><span class="other"><i class="fa fa-gamepad"></i>&nbsp;<i class="fa fa-music"></i>&nbsp;<i class="fa fa-video-camera"></i></span> OTHER PROJECTS <span class="other"><i class="fa fa-video-camera"></i>&nbsp;<i class="fa fa-music"></i>&nbsp;<i class="fa fa-gamepad"></i></span></h1>

                <h2 class="specialh2">Recent Projects</h2>
            </div>
        </div>
        
        <div class="row">
            
            <div class="col-md-6 col-xs-12">
                <h3 class="specialh3"><i class="fa fa-gamepad"></i>&nbsp; Magnetic ShapeShifter (Working Title)<span>&nbsp;<i class="fa fa-wrench" title="work in progress"></i></span></h3>
            <p>My first ever <a class="speciallink" href="https://unity3d.com/" target="_blank">Unity</a> gaming project - we'll see how it'll turn out. The game mechanics are working so far - next steps are level design and graphics.  
            </p>
            </div>
            
            <div class="col-md-6 col-xs-12">
            
            </div>
            
        </div>    
            
        <div class="row">
            
            <div class="col-md-6 col-xs-12">
                <h3 class="specialh3"><i class="fa fa-music"></i>&nbsp;<i class="fa fa-video-camera"></i> BZH (Bilder zum Hören)&nbsp;<span><i class="fa fa-flag-checkered" title="finished project"></i></span></h3>
                <p>A video project I did with four of my university colleagues themed "The Sound of Images".<br> Our interpretation was to remix a song, program audio-reactive visuals using <a class="speciallink" href="http://www.processing.org" target="_blank">Processing</a> and Quartz Composer, project our visuals onto stage smoke and circus artist Anna Golovko, and build a music video from the footage.<br> Enjoy! 
                </p>
            </div>
            
            <div class="col-md-6 col-xs-12">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube-nocookie.com/embed/ZvvxTxv55mc" allowfullscreen></iframe>
                </div>     
            </div>
            
        </div>   
            

    <?php
        createFooter();
    ?>
    </div>
</body>
</html>