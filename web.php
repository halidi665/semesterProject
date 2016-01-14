<?php
    require_once('./PHP/menu.php');
?>

<!doctype html>
<html lang="en">
<head>
    
    <title>web design | Lisa Hadinger</title>
    
   <?php
        createHtmlHead();
    ?>  

    <!-- JQuery UI CSS -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">

    
</head>
    
<body>

    <?php
        createTopMenu();
    ?>

    <div id="mainContainer" class="container" tabindex="-1">

            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <h1 class="specialh1"><i class="fa fa-globe"></i> WEB DESIGN</h1>
                    <h2 class="specialh2">recent projects</h2>
                </div>
            </div> 

            <div class="row">

                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                      <img class="img-responsive" src="img/screen_andrea_bw.png" alt="screenshot andreaseemayer.at">
                      <div class="caption">
                        <h4>Andrea Seemayer</h4>
                        <p>classical singer<br>Mezzosopran </p>
                        <p><span><i class="fa fa-wrench" title="work in progress"></i></span>&nbsp;Work in progress</p>
                        <p><a href="http://andreaseemayer.at" class="btn btn-primary" role="button" target="_blank">visit project site</a></p>
                      </div>
                    </div>
                </div>
                
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                  <img class="img-responsive" src="img/screen_tbhadinger_bw.png" alt="screenshot tbhadinger.at">
                  <div class="caption">
                    <h4>TB Hadinger</h4>
                    <p>engineering office <br>Ing. Helmut Hadinger</p>
                    
                    <p><a href="http://tb-hadinger.at" class="btn btn-primary" role="button" target="_blank">visit project site</a></p>
                  </div>
                </div>
              </div>
                
                <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                  <img class="img-responsive" src="img/screen_scout_bw.png" alt="screenshot scout.tb-hadinger.at">
                  <div class="caption">
                    <h4>Scout Hangbeurteilungssystem</h4>
                    <p>avalanche safety system</p>
                    <p><a href="http://scout.tb-hadinger.at" class="btn btn-primary" role="button" target="_blank">visit project site</a></p>
                  </div>
                </div>
              </div>
                
            </div>

            <!-- Accordion accessible -->


            <div class="row">
                <div class="col-md-6 col-xs-12">

                    <div role="tablist" id="accordion" class="demoWidget ui-accordion ui-widget ui-helper-reset">
                    <h3 tabindex="0" aria-selected="true" aria-controls="ui-accordion-sampleAccordion-panel-0" id="ui-accordion-sampleAccordion-header-0" role="tab" class="ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-accordion-header-active ui-state-active ui-corner-top"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-s"></span>
                        HTML &amp; CSS
                    </h3>
                    <div aria-hidden="false" aria-expanded="true" role="tabpanel" aria-labelledby="ui-accordion-sampleAccordion-header-0" id="ui-accordion-sampleAccordion-panel-0" style="height: 238px; display: block;" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active">
                        <p>
                            HyperText Markup Language, commonly referred to as HTML, is the standard markup language used to create web pages. Web browsers can read HTML files and render them into visible or audible web pages. HTML describes the structure of a website semantically along with cues for presentation, making it a markup language, rather than a programming language.<br>
Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in a markup language.
                        </p>

                    </div>
                    <h3 tabindex="-1" aria-selected="false" aria-controls="ui-accordion-sampleAccordion-panel-1" id="ui-accordion-sampleAccordion-header-1" role="tab" class="ui-accordion-header ui-helper-reset ui-state-default ui-accordion-icons ui-corner-all"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
                        JavaScript &amp; JQuery
                    </h3>
                    <div aria-hidden="true" aria-expanded="false" role="tabpanel" aria-labelledby="ui-accordion-sampleAccordion-header-1" id="ui-accordion-sampleAccordion-panel-1" style="height: 238px; display: none;" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                        <p>
                            JavaScript is a high-level, dynamic, untyped, and interpreted programming language. It has been standardized in the ECMAScript language specification. Alongside HTML and CSS, it is one of the three essential technologies of World Wide Web content production; the majority of websites employ it and it is supported by all modern web browsers without plug-ins. It has an API for working with text, arrays, dates and regular expressions, but does not include any I/O, such as networking, storage or graphics facilities, relying for these upon the host environment in which it is embedded.
                        </p>

                    </div>
                    <h3 tabindex="-1" aria-selected="false" aria-controls="ui-accordion-sampleAccordion-panel-2" id="ui-accordion-sampleAccordion-header-2" role="tab" class="ui-accordion-header ui-helper-reset ui-state-default ui-corner-all ui-accordion-icons"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>
                        PHP
                    </h3>
                    <div aria-hidden="true" aria-expanded="false" role="tabpanel" aria-labelledby="ui-accordion-sampleAccordion-header-2" id="ui-accordion-sampleAccordion-panel-2" style="height: 238px; display: none;" class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom">
                        <p>
                            PHP is a server-side scripting language designed for web development but also used as a general-purpose programming language. Originally created by Rasmus Lerdorf in 1994, the PHP reference implementation is now produced by The PHP Group. While PHP originally stood for Personal Home Page, it now stands for the recursive backronym PHP: Hypertext Preprocessor.
                        </p>

                    </div>

                </div>

                </div>
            </div>
        
    <?php
        createFooter();
    ?>
        
    </div>
        <!-- JQuery, JQuery UI and custom JavaScript -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="jquery-ui/jquery-ui_accessibilityenhancements/demo.js"></script>
    <script>
        $(function() {
            $( "#accordion" ).accordion();
        });
    </script>

    <script type="text/javascript" src="JS/script.js"></script>
    
    
    
</body>
</html>