<?php
    session_start();
    $_SESSION = array();
    session_destroy();

    header("Location: ../private.php?logout=true");
?> 
