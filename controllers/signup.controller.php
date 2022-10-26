<?php

// if user tries to signup by submitting the form
if (isset($_POST['submit']))
{
    // obtain the data
    $username = $_POST['newUsername'];
    $password = $_POST['newPassword'];
    $email = $_POST['email'];
    $location = $_POST['location'];
   
    // instanciate class
    include($_SERVER['DOCUMENT_ROOT'].'/database/OOPmethod/admin.CRUD.php');
    include($_SERVER['DOCUMENT_ROOT']. '/database/OOPmethod/signup.class.php');
    include($_SERVER['DOCUMENT_ROOT']. '/models/signupController.class.php'); 
    $signup = new SignupController(
        $username, $password, $email, $location, false
    );

    // run error handlers
    $signup->signupUser();

    // grab data
    header('location:/admin-login?signup=1');
}

?>