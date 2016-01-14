<?php
    session_start();
    require_once("../PHP/config.inc.php");
    require_once("../PHP/functions.inc.php");

    $valid_formats = array("jpg", "png", "gif", "zip", "bmp");
    $max_file_size = 1024*100; //100 kb
    //$path = "uploads/"; // Upload directory
    $count = 0;
    
    // save input values from form
    $projectId = $_POST['projectID'];
    
    //prepare Project ID for file names: lower case only, replace space with underscore
    // the unaltered $_POST projectID variable will be used as gallery as h1 project headline
    $projectId = strtolower(str_replace(' ', '_', $projectId)) ;


    $password = $_POST['password'];


    if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
        
        // create new directories for this gallery
        mkdir("../gallery/".$projectId."/");
        mkdir("../gallery/".$projectId."/thumbnail/"); 
        $thumbpath = "../gallery/".$projectId."/thumbnail/";
        mkdir("../gallery/".$projectId."/original/"); 
        $originalpath = "../gallery/".$projectId."/original/";
        
        // Loop $_FILES to execute all files
        foreach ($_FILES['files']['name'] as $f => $name) {   

            // if there are no errors, move uploaded file and create thumbnails
            if ($_FILES["files"]["error"][$f] == UPLOAD_ERR_OK) {   
                
                // move uploaded original files
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $originalpath.$name))
                $count++; // Number of successfully uploaded file

                $originalfile = $originalpath.$name;

                // create thumbnails and save them to this project's thumbnail directory
                saveThumb($originalfile, $thumbpath, 150);
            }

            else {
                echo "<p class='alert-danger'>Ein Fehler ist aufgetreten: " .
  $_FILES["files"]["error"][$f] . "</p>";
                continue; // Skip file if any error found
            }
        }
        echo "<p class='alert-info'>".$count." files successfully uploaded!</p>";    
        createGalleryPage();
        
        echo "<a class='btn' href='../admin.php'>go back</a>";    
    }
?>