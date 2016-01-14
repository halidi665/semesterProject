<?php
    session_start();
    require_once('PHP/menu.php');
    
?>

<!doctype html>
<html lang="en">
<head>
    
    <?php
        createHtmlHead();
    ?>
    
    <title>admin | Lisa Hadinger</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    
    <script type="text/javascript" src="JS/script.js"></script>

</head>
<body>
    
    <div id="mainContainer" class="container">
    <?php
        $projectID = $_POST['code'];
        echo "<h2>Hello ".$projectID."</h2>";
    ?>
    
    <form method="post" action="PHP/action.php" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
        <input type="file" id="file" name="files[]" multiple="multiple" accept="image/*" />
        <input type="text" name="projectID" placeholder="Project ID" required>
        <input type="text" name="password" placeholder="password">
        <input type="submit" value="start upload">
        
    </form>
    
    <form method="post" action="PHP/logout.php" enctype="text/plain">
        <div class="input-group">
            
            <input type="submit" value="log out">
        </div>
    </form>
    
    </div>
</body>
</html>