<?php 
    session_start();
    require_once('PHP/menu.php');
    require_once('PHP/functions.inc.php');
?>

<!doctype html>
<html>
<head>
    
    <?php
        createHtmlHead();
    ?>
    
    <title>gallery | Lisa Hadinger</title>
    <script src='//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js'></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <link type='text/css' rel='stylesheet' href='gallery/lightbox/css/lightbox.css'>
    <script src='gallery/lightbox/js/lightbox-plus-jquery.js'></script>
    <script type="text/javascript" src="JS/script.js"></script>
</head>
<body>
    
    <?php
        createTopMenu();
    
        $projectId = basename(curPageURL(), '.php');
        $thumbpath = "./gallery/".$projectId."/thumbnail/";
        $originalpath = "./gallery/".$projectId."/original/";
    ?>
    <div id='mainContainer' class='container'>
        <h1 class='specialh1'>Gallery</h1>
        <h2 class='specialh2'><?php echo str_replace('_', ' ', $projectId) ?></h2>

        <div class="row">
            <div class="center">
                <a class="btn btn-default" href="photography.php#theArt">go back</a>
            </div>
        </div>

    <?php
//        for debugging only
//        echo "original path: ".$originalpath."<br>";
//        echo "project: ".$projectId."<br>";
//        echo "thumbpath: ".$thumbpath."<br>";
        
        if(is_dir($thumbpath)) {
            if ($dh = opendir($thumbpath)) {
                
                echo "<div class='row'>";
                
                while ($file = readdir($dh)) {
                    if ($file != '.' && $file != '..') {
                        
                        $info = array();
                        $data = array();

                        // Informationen des Bildes auslesen
                        $size = getimagesize($originalpath.$file, $info);

                        // IPTC auslesen
                                                
                        $iptc = iptcparse($info['APP13']);

                        if (is_array($iptc)) {

                          $data['creation_date']        = $iptc["2#055"][0];
                          $data['caption']              = $iptc["2#120"][0];
                          //  echo "is array";
                        }

                        //print_r($data)."<br>";

                        
                        echo "
                        <div class='col-xs-6 col-sm-4 col-md-2'>
                        <a href='". $originalpath.$file . "' data-lightbox='my fancy gallery' data-title='".$data['caption']."' class='thumbnail'>
                            <img src='".$thumbpath.$file."' class='img-responsive' alt='".$projectId." | ".$file.", ".$data['caption']."'>
                        </a>
                        
                        </div>";
                    } 
                }
                echo "</div>";
            }
        }  
        
    ?>
    <script src='gallery/lightbox/js/lightbox-plus-jquery.js'></script>
    </div>
    <?php
        createFooter();
    ?>
</body>
</html>