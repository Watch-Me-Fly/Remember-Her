<!-- -------------- ⏫ Page top --------------- -->
<?php
    $page_title = "Add victim";
    require_once('views/components/pageTopContents.php');
?>

<!-- -------- 🎨 page specific stylesheets -------- -->
<link rel="stylesheet" type="text/css" href="assets/css/pages/addVictimFormPage.css">

<!-- -------------- 📄 page content --------------- -->
<main>
    <div class="container m-auto p-4">
        <div id="notice" class="rounded-3 text-center m-auto p-4">
            <h4>Before filling out this form :</h4>
            <p>Please know that informations are verified before they are published</p>
        </div>
        <?php include_once("views/components/addVictimForm.php") ?>
    </div>
</main>

<!-- -------------- ⏬ Page Bottom --------------- -->
<?php
    // footer
    include_once('views/components/footer.php'); 
?>
<!---------------- 📜 scripts used ---------------->
<script src="assets/js/addVictimForm.js"></script>