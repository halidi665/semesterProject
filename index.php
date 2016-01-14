<?php
    require_once('./PHP/menu.php');
?>
<!doctype html>
<html lang="en">
<head>
    
    <title>Lisa Hadinger</title>
    
    <?php
        createHtmlHead();
    ?>  
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    
    <script type="text/javascript" src="JS/script.js"></script>
</head>
    
<body>
    
    <div id="home" class="container" tabindex="-1">
        <?php
            //createTopMenu();
        ?>
        
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <h1 class="specialh1">Lisa Hadinger</h1>
                <h2 class="specialh2">Media Design</h2>
            </div>
        </div>
        
        <div class="row nav special-nav">
         
                <div class="col-md-6 col-xs-6">
                    <div class="special-nav-item">
                        <a href="web.php" title="Web Design"><i class="fa fa-globe"></i></a>    
                    </div>

                </div>
                        
                <div class="col-md-6 col-xs-6">
                    <div class="special-nav-item">
                        <a href="photography.php" title="Photography"><i class="fa fa-camera"></i></a>
                    </div>   
                </div>
        </div>
                
       <div class="row nav special-nav">
           
                <div class="col-md-6 col-xs-6">
                    <div class="special-nav-item other">
                        <a href="otherprojects.php" title="Other Projects" ><i class="fa fa-gamepad"></i><br><i class="fa fa-music"></i><i class="fa fa-video-camera"></i></a>
                    </div>    
                </div>
                
                
                <div class="col-md-6 col-xs-6">
                    <div class="special-nav-item">
                        <a href="about.php" title="About"><i class="fa fa-user"></i></a>
                    </div>
                </div>
    
        </div>       
   
    </div>
    
    <div class="container">
        <section>
            <h2 class="specialh2">UPDATES</h2>

            <article>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h3>Gallery only partially online</h3>
                        <p>I am currently reorganizing my albums and still trying to figure out a way to better integrate the gallery into the photography page. Therefore, only a few albums are online at the moment. I hope it won't be too long before I have everything up and running again!</p>
                    </div>
                </div>
                
            </article>
        </section>
        
        <?php
            createFooter();
        ?>
    </div>
    
    

</body>
</html>