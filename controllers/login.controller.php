<?php

// session_start();

// if user tries to signup by submitting the form
if (isset($_POST['submit']))
{
    // obtain the data
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // instanciate class
    include($_SERVER['DOCUMENT_ROOT'].'/database/OOPmethod/admin.CRUD.php');
    include($_SERVER['DOCUMENT_ROOT'].'/database/OOPmethod/login.class.php');
    include($_SERVER['DOCUMENT_ROOT'].'/models/loginController.class.php');

    $login = new LoginController(
        $username, $password
    );

    // check session validity
    if ( isset($_SESSION['userID']) && !empty($_SESSION['userID']) )
    {
        // log in user
        header('Location:/admin/dashboard');
        exit();
    }
    // if no session, start user verification process
    else
    {
        $login->loginUser();
    }

}

?>