<?php
    // -- -------------- ⏫ Page top --------------- --
    $title = "Add victim";
    require_once('views/components/back-office/top.php');
?>
<!-- -------- 🎨 page specific stylesheets -------- -->
<link rel="stylesheet" type="text/css" href="./../../../assets/css/back-office/adminAdd.css">

<!-- -------------- 📄 page content --------------- -->
<?php if (isset($_SESSION['userID'])) : ?>

<div class="container rounded-4 m-auto p-4">
    <div id="notice" class="rounded-3 text-center m-auto p-4">
        <h4>⚠ Please verify before publishing ⚠</h4>
        <p class="text-danger fw-bold">As an admin, posts are directly published and do not await
            verifications</p>
    </div>
    <p id="error" class="text-danger rounded-3 p-3 mx-auto">
    </p>
    <?php include_once("views/components/addVictimForm.php") ?>
</div>

<!---------------- 📜 scripts used ---------------->
<script src="./../../../assets/js/back-office/adminAdd.js"></script>

<!-- -------------- ⏬ Page Bottom --------------- -->
<?php require_once('views/components/back-office/footer.php'); ?>

<?php endif; ?>