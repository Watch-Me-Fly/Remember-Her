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

        <!-------- 🏴 add meta tags and SEO -------->
        <?php require_once('./../../assets/meta.php') ?>

        <!-------- 🎨 stylesheets used throughout all pages -------->
        <?php require_once('./../../assets/css/stylesheet.php'); ?>

        <title><?php $page_title; ?></title>
    </head>