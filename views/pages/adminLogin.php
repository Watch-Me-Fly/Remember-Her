<?php
    // verify login details
    require_once('controllers/back-office/login.php');
    
    // -- -------------- ⏫ Page top --------------- --
    require_once('views/components/pageTopContents.php');
    $page_title = "Remember Her";
?>

<!-- -------- 🎨 page specific stylesheets -------- -->
<link rel="stylesheet" href="assets/css/pages/adminLogin.css">

<?php if (empty($_SESSION['admin'])) : ?>

<!-- -------------- 📄 page content --------------- -->
<main>
<!-- header for admin disclaimer -->
<h3 class="text-center rounded-3 fst-italic my-4 mx-auto p-4">
            Login as admin, or register as one
</h3>
<div id="connectContainer" class="container px-0 pb-3 mb-5">

    <!-- ------------navbar of the login / signup container------------- -->
    <div id="connectNavBar" class="container-fluid d-flex text-light fw-bold">

        <!-- logo ANCHOR flex-column ? -->
        <div id="logo" class="col-3 d-flex align-items-center">
            <img src="assets/images/logo.png" alt="logo" width="30px" class="m-2" />
            <span class="fw-bold line">Remember her</span>
        </div>

        <!-- navbar -->
        <div class="col-9 d-flex justify-content-end align-items-center">
            <ul class="nav">
                <li class="nav-item">
                    <a href="" class="nav-link" id="loginLink">
                        Log in
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link" id="registerLink">
                        Sign up
                    </a>
                </li>
            </ul>
        </div>

    </div>

    <!-- -----------------contents of connection box------------------ -->
    <div id="connectBoxContents" class="m-3 p-4">

        <?php

            // -- login page --
            require_once('views/components/adminLogin.php');

            // -- signup page --
            require_once('views/components/adminSignup.php');

        ?>

    </div>
</div>

</main>

<?php endif; ?>

<!-- -------------- ⏬ Page Bottom --------------- -->
<?php
    // footer
    include_once('views/components/footer.php'); 
?>

<!---------------- 📜 scripts used ---------------->
<script src="assets/js/adminLogin.js"></script>