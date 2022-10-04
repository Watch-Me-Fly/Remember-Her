<link rel="stylesheet" type="text/css" href="./../../assets/css/stickyHomeButton.css">


<?php
    /**============================================
     *               ANCHOR language
     *=============================================**/
        // if ($language == 'en') {
        //     $home = 'To the top';
        // } else if ($language == 'fr') {
        //     $home = 'Haut de la page';
        // } else if ($language == 'ar') {
        //     $home = 'أعلى الصفحة';
        // }
    $home = "to the top";
?>

<div id="stickySideMenu">
    <a href="header">
        <img 
            src="./../../assets/icons/dark-mode/home.png" 
            alt=<?= $home ?> 
            title=<?= $home ?> 
            width="30px"
        >
    </a>
</div>