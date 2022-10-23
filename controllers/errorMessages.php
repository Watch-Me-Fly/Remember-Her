<?php

// login page error messages :

if (isset($_GET['error']))
{
    // set a variable to simplify code
    $getErrorIsSet = isset($_GET['error']);

    // ----- sql errors
    if ($getError == 'failed-statement')
    {
        $errorMessage = "an error occurred while executing the query";
    }
    // ----- login errors
    if ($getError == 'userNotFound')
    {
        $errorMessage == "This username / email does not exist in the database";
    }
    if ($getError == 'pendingAdmin')
    {
        $errorMessage = sprintf('📄 Registeration application 
        for user <u>'. $_POST['username'] . '</u> is either 
        <b>pending</b> acceptance, 
        or is <b>refused</b>, 
        please try again later');
    }
    if ($getError == 'incorrectLogin')
    {
        $errorMessage = sprintf('❌ Username <u>' . $_POST['username'] . '</u> or password incorrect. Please try again, or signup as admin');
    }
    if ($getError == 'wrongPassword')
    {
        $errorMessage = "❌ Wrong Password, please retry";
    }
    if ($getError == 'fieldsCheck')
    {
        $errorMessage = "Please fill in all the required fields";
    }
    

}

?>