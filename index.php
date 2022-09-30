<?php 
    $title = "page title";
    $pageContent = "page content";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- meta and SEO tags -->
        <?php include_once('./assets/meta.php'); ?>
        <!-- stylesheets used through all pages -->
        <?php include_once('./assets/css/stylesheet.php'); ?>
        <title><?= $title ?></title>
    </head>
    <body>
        <?php include_once('./views/components/navbar.php'); ?>
        <?php include_once('./views/components/header.php'); ?>
        <?php include_once('./views/components/backToTop.php'); ?>

        <?php include_once('./views/pages/landingPage.php'); ?>
        <!-- <?= $pageContent ?> -->
        
        <?php include_once('./views/components/footer.php'); ?>
        <?php include_once('./assets/js/script.php'); ?>
    </body>
</html>