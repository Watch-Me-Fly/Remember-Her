<?php
    // connect to the ongoing session
    session_start();
    // destroy it
    session_destroy();
    // redirect the user back to the login page
    header('location:/admin-login');
    // end the script
    exit;
    
?>