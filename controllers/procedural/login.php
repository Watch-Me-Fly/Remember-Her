<?php

    session_start();
    require_once('database/OOPmethod/admin.CRUD.php');
    require_once('controllers/back-office/functions.php');


    // connect to database
    $admins = AdminCRUD::read();

    // create session in case of connection success, or send error in case of failure
    if ( isset($_POST['username']) && isset($_POST['password']) )
    {
        foreach ($admins as $admin)
        {
            // user found ?
            if (
                // allow login with username or email
                ($admin->username === $_POST['username']
                || $admin->email === $_POST['username'] ) &&
                $admin->password === md5($_POST['password'])
            )

            // var_dump($admin);

                // verify if the person's admin request has been accepted
                if ( isAdmin($admin[0]) )
                {
                    // set the session with username
                    $_SESSION['userID'] = $admin[0]['admin_id'];
                    // redirect to admin page
                    header('location:/admin');
                }
                else
                {
                    $errorMessage = sprintf('📄 Registeration application 
                            for user <u>'. $_POST['username'] . '</u> is either 
                            <b>pending</b> acceptance, 
                            or is <b>refused</b>, 
                            please try again later');
                }

            else
            {
                // var_dump($admin);
                // otherwise, error message, propose retry or signup
                $errorMessage = sprintf('❌ Username <u>' . $_POST['username'] . '</u> or password incorrect. Please try again, or signup as admin');
            }
        }
    }

    // login page, if session exists => go directly to dashboard
    if ( !empty($_SESSION['userID']) )
    {
        header('location: /admin/dashboard');
    }
?>