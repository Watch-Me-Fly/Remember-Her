<?php
    // ANCHOR verify link to admin login page

    // connect to the ongoing session
    session_start();
    // destroy it
    session_destroy();
    // redirect the user back to the login page
    header('location:/home');
    // end the script
    exit;
    
?>