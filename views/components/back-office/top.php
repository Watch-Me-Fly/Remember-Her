<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <!-- stylesheets used through all pages -->
    <?php 
        require_once('assets/css/back-office/stylesheets.php');
    ?>
    <title><?= $title ?></title>
</head>

<body class="min-vh-80">

<?php 
    if (!isset($_SESSION['userID'])) 
    {
        require_once('errorNotLoggedIn.php');
    }
    else
    {
        // -- -----------------Navigation------------------ --
        require_once('navbar.php');

        // -- -----------------Main------------------ --
        echo "<main>";
    }
?>