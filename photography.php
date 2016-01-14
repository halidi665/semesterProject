<?php
    require_once('./PHP/menu.php');
?>
<!doctype html>
<html lang="en">
<head>
    
    <title>photography | Lisa Hadinger</title>
    
    <?php
        createHtmlHead();
    ?>  
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="bootstrap-3.3.6/js/transition.js"></script>
    <script src="bootstrap-3.3.6/js/carousel.js"></script>
    
    <script type="text/javascript" src="JS/script.js"></script>
</head>
    
<body>

   <?php
        createTopMenu();
    ?>
    
    <div id="mainContainer" class="container" tabindex="-1">
        
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <h1 class="specialh1"><i class="fa fa-camera"></i> PHOTOGRAPHY</h1>
            </div>
        </div>
        
        <!-- SLIDER -->
        <div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                    
                    <div class="item active">
                        <a href="Turkey_2015.php">
                          <img class="img-responsive" src="img/slider/slider1_Turkiye_150804_164357.jpg" alt="Eastern Turkey, mountains and fields">
                          <div class="carousel-caption">
                                <h3>Eastern Turkey</h3>
                                <p>Mountains and fields in the province of Erzincan</p>
                          </div>
                        </a>
                    </div>
                  
                    <div class="item">
                        <a href="on_location.php">
                          <img class="img-responsive" src="img/slider/slider2_IMG_0635.jpg" alt="Portrait available light">
                          <div class="carousel-caption">
                                <h3>Portrait session</h3>
                          </div>
                        </a>
                    </div>
                  
                    <div class="item">
                        <a href="Turkey_2015.php">
                          <img class="img-responsive" src="img/slider/slider3_Turkiye_150901_205233.jpg" alt="Streetlights illuminating a hill in Gebze, Turkey">
                          <div class="carousel-caption">
                                <h3>Glowing Hill</h3>
                                <p>Gebze, Turkey</p>
                          </div>
                        </a>
                    </div>
                  
                    <div class="item">
                      <img class="img-responsive" src="img/slider/slider4_20141018_Wildsau-Dirtrun-0349.jpg" alt="Wildsau Dirt Run, man crawling through mud">
                      <div class="carousel-caption">
                            <h3>Wildsau Dirt Run</h3>
                            
                      </div>
                    </div>
                    
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
            
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
        </div>
        <!-- END OF SLIDER -->
        
        
        
        <div class="row">
            
            <div class="col-md-12 col-xs-12">
                <h2 class="specialh2">Galleries</h2>
            </div>
            <div id="theArt">

                <div class="artGroup slide">
                    <div class="artwork"> 
                        <a href="Turkey_2015.php" title="Turkey 2015">
                            <img src="img/gallery-thumb_turkey15.jpg" alt="Turkey 2015: wall painting: 'Cay lav yu!'">
                            <div class="detail">
                                <h3>Turkey 2015</h3>
                                <p>travel photography</p>
                                <p>a five week / 11.500 km trip from Vienna to Istanbul, all around Turkey and back</p>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="artGroup slide">
                    <div class="artwork"> 
                        <a href="baby_on_board.php" title="Baby on board">
                            <img src="img/gallery-thumb_babyonboard.jpg" alt="pregnancy pictures: baby on board">
                            <div class="detail">
                                <h3>Baby on board</h3>
                                <p>studio photography</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="artGroup slide">
                    <div class="artwork"> 
                        <a href="Andrea.php">
                            <img src="img/gallery-thumb_andrea.jpg" alt="studio photography for classical singer Andrea Seemayer">
                            <div class="detail">
                                <h3>Andrea</h3>
                                <p>studio photography<br>for classical singer<br>Andrea Seemayer</p>
                            </div> 
                        </a>
                    </div>
                </div>

                <div class="artGroup slide">
                    <div class="artwork"> 
                        <a href="on_location.php">
                            <img src="img/gallery-thumb_watchads.jpg" alt="on location photography for fictional watch ads">
                            <div class="detail">
                                <h3>fictional watch ads</h3>
                                <p>on location photography</p>
                            </div> 
                        </a>
                    </div>
                </div>

                <div class="artGroup slide">
                    <div class="artwork"> 
                        <a href="#">
                            <img src="img/gallery-thumb_dirtrun.jpg" alt="on location photography at the Wildsau dirtrun">
                            <div class="detail">
                                <h3>Wildsau Dirt Run 2014</h3>
                                <p>on location documentary</p>
                                <p>several hours of climbing over / under obstacles and through ever-present mud</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="artGroup slide">
                    <div class="artwork"> 
                        <a href="Thailand.php">
                            <img src="img/gallery-thumb_thailand13.jpg" alt="Thailand 2013: a Buddha statue in Bangkok">
                            <div class="detail">
                                <h3>Thailand 2013</h3>
                                <p>travel photography</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!--<div class="artGroup slide">
                    <div class="artwork"> <a href="#">
                        <img src="img/gallery-thumb_usa13.jpg">
                        <div class="detail">
                            <h3>USA Midwest 2013</h3>
                            <p>travel photography</p>
                            <p>Route: Las Vegas - Denver</p>
                        </div></a>
                    </div>
                </div>-->
            </div>

        </div>

    </div>
    <?php
        createFooter();
    ?>

</body>
</html>