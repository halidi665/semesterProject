<?php
    function createTopMenu() {
?>
 
    <header>
        <a href="#mainContainer" class="sr-only sr-only-focusable">Skip to main content</a>
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="navbar-collapse collapse">
                <nav class='navbar regular-nav'>
                        
                        
                    <ul class="navbar-nav">
                        <li class="navbar-brand" tab-index="0">
                            <a href="index.php">
                                <!-- ADRESSE ÄNDERN!!! -->
                                <img alt="LiHa" width="25" height="25" src="../semesterprojekt/img/logo.png">
                            </a>
                        </li>
                        <li tab-index="0"><a href='about.php'>ABOUT</a></li>
                        <li tab-index="0"><a href='web.php'>WEB DESIGN</a></li>
                        <li tab-index="0"><a href='photography.php'>PHOTOGRAPHY</a></li>
                        <li tab-index="0"><a href='otherprojects.php'>OTHER PROJECTS</a></li>
                        <li tab-index="0"><a href='private.php'>LOGIN</a></li>
                    </ul>
                </nav>
                    
            </div>
            <!--/.nav-collapse -->
        </div>
    </header>

<?php
    }
?>


<?php
    function createFooter() {
?>
        <footer>
            <p>
                <a href="https://at.linkedin.com/pub/lisa-hadinger/69/137/841" target="_blank" title="visit my Linked in profile"><i class="fa fa-linkedin"></i></a>
                <a href="https://www.xing.com/profile/Lisa_Hadinger" target="_blank" title="visit my Xing profile"><i class="fa fa-xing"></i></a>
                <a href="mailto:hello@lisahadinger.at" title="send an e-mail"><i class="fa fa-envelope"></i></a>
            </p>
            <p>
                <a href="imprint.php" title="imprint"> &copy; 2015 Lisa Hadinger</a>
            </p>
        </footer>
<?php
    }
?>


<?php
    function createHtmlHead() {
?>        
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" src="//normalize-css.googlecode.com/svn/trunk/normalize.css" />
    <link href='http://fonts.googleapis.com/css?family=Londrina+Sketch|Advent+Pro:200,400' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.3.6/docs/examples/grid/grid.css">
    <link type="text/css" rel="stylesheet" href="CSS/custom-styles.css">
<?php
    }
?>