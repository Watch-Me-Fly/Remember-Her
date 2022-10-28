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

if ( isset($_POST['deleteBtn']) )
{
    /*--------------------------------------------
    *           Delete user's info
    *---------------------------------------------*/
        $where = ['admin_id' => $_SESSION['userID']];

        $deleteAdmin= AdminCRUD::delete($where);

        header('location:/home');

}

?> 