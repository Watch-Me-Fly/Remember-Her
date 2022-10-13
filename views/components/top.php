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

        <?php 
            // -------- 🎨 stylesheets used throughout all pages --------
            require_once('assets/css/stylesheets.php');
        
            // -------- 🔍 add meta tags and SEO --------
            require_once('assets/meta.php');
        ?>

        <!-------- 🏴 icon -------->
        <link rel="icon" type="image/x-icon" href="assets/images/logo.png">

        <title><?= $page_title; ?></title>
    </head>