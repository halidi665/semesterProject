<?php
    // start session
    session_start();

    // connect to database
    require_once("../PHP/config.inc.php");

    try {
            $db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PW);
        }
        catch (PDOException $e) {
            echo "Verbindung fehlgeschlagen";
            die();
        }
    
    // store user input from login form in variables
    $code = strip_tags($_POST["code"]);
    $password = strip_tags($_POST["password"]);

    // get userdata from database where username and password match login input
    $projectID = $db->query('SELECT projectID FROM liha_project WHERE projectID="' . $code . '" AND password="' . $password . '"');
    $projectID = $projectID->fetchAll();

    //echo "userID is: ".$userID['userID'];
    //print_r($db->errorInfo());


    if($projectID != null) {
        
        $_SESSION["code"] = $code;
        
        if($code == 'admin') {
            $_SESSION['godmodeOn'] = true;
            header("Location: ../admin.php");
        }
        else {
            $_SESSION['godmodeOn'] = false;
            header("Location: ".$code.".php");
        }
        
        
    }
    else {
        
        header("Location: ../private.php?error=1");
    }
?>