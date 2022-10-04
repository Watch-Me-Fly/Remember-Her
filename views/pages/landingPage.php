<!-- -------- 🎨 page specific stylesheets -------- -->
<link rel="stylesheet" type="text/css" href="./../../assets/css/landingPage.css">
<link rel="stylesheet" type="text/css" href="./../../assets/css/carousel.css">

<!-- -------------- ⏫ Page top --------------- -->
<?php

    $page_title = "Remember Her";

    require_once('./../../views/components/top.php');
    require_once('./../../views/components/navbar.php');
    require_once('./../../views/components/header.php');
    include_once('./../../views/components/stickyHomeButton.php');
?>

<!-- -------------- 📄 page content --------------- -->
<div id="about" class="rounded-3 p-4">
    <p>
        To the stolen youths of
        <b>Iman Arshid</b>,
        <b>Naira Asharaf</b>,
        and <b>Loulouah Althouaini</b>,<br/>
        the girls who have inspired my project.<br />
        May you rest in peace...
    </p>
</div>

<!-- -------------- ⏬ Page Bottom --------------- -->
<?php
    // carousel
    include_once('./../../views/components/carousel.php');
    // footer
    include_once('./../../views/components/footer.php'); 
?>

<!---------------- 📜 scripts used ---------------->
<script src="./../../assets/js/carousel.js"></script>