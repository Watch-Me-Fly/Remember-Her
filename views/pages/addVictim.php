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
    <?php if(!isset($_GET['added'])) : ?>
        <div id="notice" class="rounded-3 text-center m-auto p-4">
            <h4>Before filling out this form :</h4>
            <p>Please know that informations are verified before they are published</p>
        </div>
        <?php include_once("views/components/addVictimForm.php"); ?>
            
            <?php else : ?> 
            <div class='alert alert-success w-50 mx-auto d-flex justify-content-between align-items-center'>

                ✅ Your entry was taken into account, it will be verified by an admin before publishing it on the website

            </div>
            
            <?php endif; ?>
    </div>
</main>

<!-- -------------- ⏬ Page Bottom --------------- -->
<?php
    // footer
    include_once('views/components/footer.php'); 
?>
<!---------------- 📜 scripts used ---------------->
<script src="assets/js/addVictimForm.js"></script>