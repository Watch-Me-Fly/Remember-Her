<div id="login" class="container">
    <h2 class="text-center p-3">Welcome <span>back</span></h2>

    <!-- if info is incorrect, display error message -->
    <?php if(isset($errorMessage) ): ?>

        <p id="errorLogin" class="alert alert-danger rounded-3 fst-italic p-3 m-3">
            <?= $errorMessage; ?>
        </p>

    <?php endif; ?>
    
    <!-- if the person is not logged in, open log in / sign up page -->
    <form method="POST" id="signinForm" class="" enctype="multipart/form-data" action="controllers/login.controller.php">

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
            <input type="submit" value="Log in &gt;" class="btn btn-secondary" name="submit">
        </div>

    </form>
</div>