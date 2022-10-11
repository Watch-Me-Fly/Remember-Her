<?php

    $page_title = "Remember Her";

    // verify login details
    require_once('controllers/back-office/login.php');
    
?>

<!-- -------- 🎨 page specific stylesheets -------- -->
<link rel="stylesheet" href="assets/css/pages/adminLogin.css">

<!-- -------------- ⏫ Page top --------------- -->
<?php
    require_once('views/components/pageTopContents.php');
?>

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

        <!-- login page -->
        <div id="login" class="container">
            <h2 class="text-center p-3">Welcome <span>back</span></h2>

            <!-- if info is incorrect, display error message -->
            <?php if(isset($errorMessage) ): ?>

                <p id="errorLogin" class="alert alert-danger rounded-3 fst-italic p-3 m-3">
                    <?= $errorMessage; ?>
                </p>

            <?php endif; ?>
            <!-- name exists, but "is_admin" =false (pending approval or refused) -->
            <?php if(isset($refusedAdmin) ): ?>

                <p id="errorLogin" class="alert alert-danger rounded-3 fst-italic p-3 m-3">
                    <?= $refusedAdmin; ?>
                </p>

            <?php endif; ?>

            <!-- if the person is not logged in, open log in / sign up page -->
            <?php if (empty($_SESSION['admin'])) : ?>

            <form action="" method="POST" id="signinForm" class="" enctype="multipart/form-data">

                <div class="input-group d-flex align-items-center mb-3">
                    <label for="username">Username :</label>
                    <input type="text" name="username" id="username" class="form-control rounded-2"
                        placeholder="Username or Email" required autocomplete="on">
                </div>

                <div class="input-group d-flex align-items-center mb-3">
                    <label for="password">Password :</label>
                    <input type="password" name="password" id="password" class="form-control rounded-2"
                        placeholder="Password" required autocomplete="on">
                </div>

                <div class="input-group justify-content-center">
                    <input type="submit" value="Log in &gt;" class="btn btn-secondary">
                </div>

            </form>
        </div>

        <!-- signup page -->
        <div id="register" class="container">
            <h2 class="text-center p-3">Join as <span>Admin</span></h2>
            <p class="description"></p>

            <p id="errorRegistration" class="alert alert-danger error rounded-3 fst-italic p-3 m-3">
                </p>
                <!-- // ANCHOR : if email or username exists -->

            <form action="" method="GET" id="registerForm" class="" enctype="multipart/form-data">
                <!-- username -->
                <p>Please note that username cannot be changed</p>
                <div class="input-group d-flex align-items-center mb-3">
                    <label for="newUsername">Username :</label>
                    <input type="text" name="newUsername" id="newUsername" class="form-control rounded-2"
                        placeholder="Username" required autocomplete="off" />
                </div>
                <!-- ANCHOR verify while typing username available or not -->
                <!-- email -->
                <div class="input-group d-flex align-items-center mb-3">
                    <label for="email">Email :</label>
                    <input type="email" name="email" id="email" class="form-control rounded-2"
                        placeholder="Email" required autocomplete="off" />
                </div>
                <!-- ANCHOR verify while typing email available or not -->
                <!-- password -->
                <div class="input-group d-flex align-items-center mb-3">
                    <label for="newPassword">Password :</label>
                    <input type="password" name="newPassword" id="newPassword" class="form-control rounded-2"
                        placeholder="Password" required autocomplete="off" />
                </div>
                <!-- submit -->
                <div class="input-group  justify-content-center mb-3">
                    <input type="submit" value="Sign up >" class="btn btn-secondary">
                </div>
                <!-- ANCHOR captcha -->
            </form>
        </div>
        <?php endif; ?>

    </div>
</div>

</main>

<!-- -------------- ⏬ Page Bottom --------------- -->
<?php
    // footer
    include_once('views/components/footer.php'); 
?>

<!---------------- 📜 scripts used ---------------->
<script src="assets/js/adminLogin.js"></script>