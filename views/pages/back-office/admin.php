<?php
    session_start();

    // if logged in successfully, redirect to dashboard
    if (isset($_SESSION['admin']))
    {
        // ANCHOR : where to display ?
        $welcomeMessage = sprintf('Hello again '.
                        $_SESSION['username'] . 
                        'please wait while you are being redirected 
                        to your dashboard.');

        header('Location:/admin/dashboard');
    }
    else
    {
        // if failed to log in, redirect back to log in page
        header('location:/admin-login');
    }
?>