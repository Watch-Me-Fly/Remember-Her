<link rel="stylesheet" type="text/css" href="./../../assets/css/back-office/adminSettings.css">


<div id="adminSettings" class="container d-flex justify-content-between rounded-4 my-5 mx-auto p-4">
    <div class="d-flex flex-column align-items-center justify-content-center p-5">
        <img src="./../../../assets/icons/back-office/profile.png" alt="username" width="100px">
        <h4 class="fw-bold">${username}</h4>
    </div>
    <div class="p-5">

        <form class="form">
            <div class="form-group mb-2">
                <label for="lang" class="form-label mb-2">🌎 Change Language</label>
                <select name="lang" id="lang" class="form-select">
                    <option value="ar">عربي</option>
                    <option value="fr">Français</option>
                    <option value="en">English</option>
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="editMail" class="form-label mb-2">
                    ✉ Edit your email address
                </label>
                <input type="email" name="editMail" id="editMail" class="form-control mb-2"
                    placeholder="<?= echo 'mail' ?>">
            </div>
            <div class="form-group mb-2">
                <label for="editPassword" class="form-label mb-2">
                    🔑 Edit your password
                </label>
                <input type="password" name="editPassword" id="editPassword" class="form-control"
                    placeholder="<?= echo 'password' ?>">
            </div>
            <div class="form-group mt-5">
                <input type="submit" value="Submit Changes" class="btn btn-primary">
            </div>
        </form>

    </div>
</div>

<script src="./../../../../assets/js/back-office/adminSettings.js"></script>