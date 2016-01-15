<?php
    require_once('./PHP/menu.php');
?>

<!doctype html>
<html lang="en">
<head>
    
    <title>imprint | Lisa Hadinger</title>
    
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
                <h1 class="specialh1">IMPRINT</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <h3>CONTACT</h3>
                <p>Mag. Lisa Hadinger<br>
                E-Mail: <a class="speciallink" href="mailto:hello@lisahadinger.at">hello@lisahadinger.at</a></p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <h3>CREDITS</h3>
                <p>Images:<br>
                    Start page: Veronika Mittermair<br>
                    About page: Andrea Seemayer
                </p>
            </div>

            </div>
        

    
            <?php
                createFooter();
            ?>
        </div>
</body>
</html>