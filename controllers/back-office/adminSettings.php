<?php

if ( isset($_POST['submitBtn']) )
{
    /*--------------------------------------------
    *           Update user's info
    *---------------------------------------------*/
    $hashedPW = md5($_POST['editPassword']);
    
    $admin = AdminCRUD::update($_SESSION['userID'], $hashedPW, $_POST['editMail']);

    $successMessage = "✅ Your informations have been updated successfully";
}



?> 