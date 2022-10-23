<?php 
    require_once('controllers/countrySelector.php'); 
?>

<div id="register" class="container">
    <h2 class="text-center p-3">Join as 
        <span>Admin</span>
    </h2>
    <p class="description"></p>

    <p id="errorRegistration" class="alert alert-danger error rounded-3 fst-italic p-3 m-3">

    </p>

    <form method="POST" id="registerForm" action="controllers/signup.controller.php" class="" enctype="multipart/form-data">
        <!-- username -->
        <p>Please note that username cannot be changed</p>
        <?php if(isset($errorMessage) ): ?>

            <p id="errorLogin" class="alert alert-danger rounded-3 fst-italic p-3 m-3">
                <?= $errorMessage; ?>
            </p>

        <?php endif; ?>
        
        <input type="hidden" name="admin_id">
        <div class="input-group d-flex align-items-center mb-3">
            <label for="newUsername">
                Username :
                <span class="required">*</span>
            </label>
            <input type="text" name="newUsername" id="newUsername" class="form-control rounded-2"
                placeholder="Username" required autocomplete="off" />
        </div>
        <!-- ANCHOR verify while typing username available or not -->
        <!-- email -->
        <div class="input-group d-flex align-items-center mb-3">
            <label for="email">
                Email :
                <span class="required">*</span>
            </label>
            <input type="email" name="email" id="email" class="form-control rounded-2"
                placeholder="Email" required autocomplete="off" />
        </div>
        <!-- ANCHOR verify while typing email available or not -->
        <!-- password -->
        <div class="input-group d-flex align-items-center mb-3">
            <label for="newPassword">
                Password :
                <span class="required">*</span>
            </label>
            <input type="password" name="newPassword" id="newPassword" class="form-control rounded-2"
                placeholder="Password" required autocomplete="off" />
        </div>
        <div class="input-group d-flex align-items-center mb-3">
            <label for="location">
                Country of residence :
                <span class="required">*</span>
            </label>
            <select name="location" id="location" class="form-select" required>
                <option value="" disabled selected="selected">-- please choose --</option>
                <!-- JSON countries  -->
                <?php
                    foreach ($json as $country)
                    {
                        echo "<option value=" . $country['code'] . ">" 
                                . $country['name'] . 
                             "</option>";
                    }
                ?>
            </select>
        </div>
        <!-- submit -->
        <div class="input-group  justify-content-center mb-3">
            <input type="submit" name="submit" value="Sign up >" class="btn btn-secondary">
        </div>
        <!-- ANCHOR captcha -->
    </form>
</div>