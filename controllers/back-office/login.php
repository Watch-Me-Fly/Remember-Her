<?php

    session_start();

    include_once('mocks/users.php');
    include_once('controllers/back-office/functions.php');


    // create session in case of connection success, or send error in case of failure
    if ( isset($_POST['username']) && isset($_POST['password']) )
    {
        foreach ($admins as $admin)
        {
            // user found ?
            if (
                // allow login with username or email
                ($admin['username'] === $_POST['username']
                || $admin['email'] === $_POST['username'] ) &&
                $admin['password'] === $_POST['password']
            )
                // verify if the person's admin request has been accepted
                if ( isAdmin($admin) )
                {
                    // set the session with username
                    $_SESSION['admin'] = $admin['username'];
                    // redirect to admin page
                    header('location:/admin');
                }
                else
                {
                    $refusedAdmin = sprintf('📄 Registeration application 
                            for user <u>'. $_POST['username'] . '</u> is either 
                            <b>pending</b> acceptance, 
                            or is <b>refused</b>, 
                            please try again later');
                }

            else
            {

                // otherwise, error message, propose retry or signup
                $errorMessage = sprintf('❌ Username <u>' . $_POST['username'] . '</u> or password incorrect. Please try again, or signup as admin');
            }
        }
    }

    // login page, if session exists => go directly to dashboard
    if ( !empty($_SESSION['admin']) )
    {
        header('location: /admin/dashboard');
    }
?>