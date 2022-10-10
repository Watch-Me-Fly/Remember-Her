<?php
    /**--------------------------------------------
     *          ANCHOR language changer (//!temp)
     *---------------------------------------------**/
    // $language;
?>
<!DOCTYPE html>
<html lang="<?php $language ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-------------------------- GENERAL ---------------------------->
        <!-- Color scheme -->
            <link rel="stylesheet" type="text/css" href="assets/css/colorPalette.css">
        <!-- Bootstrap -->
            <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
        <!-- Google fonts -->

        <!-- General styling -->
            <link rel="stylesheet" type="text/css" href="assets/css/general.css">

        <!-- ------- 🎨 stylesheets used throughout all pages -------- -->
        <!--------------------- Main components ------------------------>
        <!-- Navigation bar -->
            <link rel="stylesheet" type="text/css" href="assets/css/components/navbar.css">
        <!-- Header -->
            <link rel="stylesheet" type="text/css" href="assets/css/components/header.css">
        <!-- sticky home button -->
            <link rel="stylesheet" type="text/css" href="assets/css/components/stickyHomeButton.css">
        <!-- Footer -->
            <link rel="stylesheet" type="text/css" href="assets/css/components/footer.css">

        <?php 
            // -------- 🔍 add meta tags and SEO --------
            require_once('assets/meta.php');
        ?>

        <!-------- 🏴 icon -------->
        <link rel="icon" type="image/x-icon" href="assets/images/logo.png">

        <title><?= $page_title; ?></title>
    </head>