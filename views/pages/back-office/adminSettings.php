<?php
    // -- -------------- ⏫ Page top --------------- --
    $title = "Settings";
    require_once('views/components/back-office/top.php');
    require_once('models/admin.class.php');
    
    if (isset($_SESSION['userID']))
    {
        /*--------------------------------------------
        *       Retrieve country name from its code
        *---------------------------------------------*/
        require_once($_SERVER['DOCUMENT_ROOT'].'/controllers/countrySelector.php');
        $countryCode = $userInfo[0]->location;

        // to update and delete
        require_once('controllers/back-office/adminSettings.php');
    }

?>
<!-- -------- 🎨 page specific stylesheets -------- -->
<link rel="stylesheet" type="text/css" href="./../../../assets/css/back-office/admin.css">
<link rel="stylesheet" type="text/css" href="./../../../assets/css/back-office/adminSettings.css">

<!-- -------------- 📄 page content --------------- -->
<?php if (isset($_SESSION['userID'])) : ?>

<?php if (isset($successMessage)) : ?>
    <div class="alert alert-success alert-dismissible w-50 mx-auto d-flex justify-content-between align-items-center">
        <?= $successMessage; ?>
        <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    </div>
<?php endif; ?>

<div id="adminSettings" class="container d-flex justify-content-between rounded-4 my-5 mx-auto p-4">
    <div class="d-flex flex-column align-items-center justify-content-center p-3">
        <img src="./../../../assets/icons/back-office/profile.png" alt="username" width="100px">
        <!-- card title displaying username -->
        <div class="d-flex align-items-center">
            <img src="https://countryflagsapi.com/png/<?= $userInfo[0]->location; ?>" 
                alt="<?= $userInfo[0]->location; ?>" 
                title="<?php getCountryByCode($json, $countryCode) ?>" 
                width="20px" height="15px">
            <h4 class="fw-bold">&nbsp; <?= $userInfo[0]->username; ?></h4>
        </div>
    </div>
    <div class="p-3">

        <form class="form" method="POST" action="">
            <?php $adminId = $userInfo[0]->id; ?>
            <div class="form-group mb-2">
                <label for="lang" class="form-label mb-2">🌎 Change Language</label>
                <select name="lang" id="lang" class="form-select">
                    <option value="" disabled selected>--Select--</option>
                    <option value="ar">عربي</option>
                    <option value="fr">Français</option>
                    <option value="en">English</option>
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="editMail" class="form-label mb-2">
                    ✉ Edit your email address
                </label>
                <!-- keep the old email displayed in case wanting to edit -->
                <input type="email" name="editMail" id="editMail" class="form-control mb-2"
                    placeholder="Your email" value="
                    <?= strip_tags(htmlentities($userInfo[0]->email)); ?>
                    ">
            </div>
            <div class="form-group mb-2">
                <label for="editPassword" class="form-label mb-2">
                    🔑 Edit your password
                </label>
                <input type="password" name="editPassword" id="editPassword" class="form-control"
                    placeholder="Your password" value="********" onfocus="this.value=''" required>
            </div>
            <div id="buttonsContainer" class="form-group mt-5 d-flex justify-content-around">
                <input type="submit" value="Submit Changes" 
                        class="btn btn-primary m-3" 
                        name="submitBtn">
                <input type="submit" value="Delete My Account" 
                        class="btn btn-danger m-3" id="deleteAccount" 
                        name="deleteBtn">
            </div>
        </form>

    </div>
</div>

<!---------------- 📜 scripts used ---------------->
<script src="./../../../assets/js/back-office/adminSettings.js"></script>

<!-- -------------- ⏬ Page Bottom --------------- -->
<?php require_once('views/components/back-office/footer.php'); ?>

<?php endif; ?>