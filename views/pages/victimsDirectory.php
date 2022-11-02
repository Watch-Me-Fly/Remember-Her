<!-- -------- 🎨 page specific stylesheets -------- -->
<link rel="stylesheet" type="text/css" href="assets/css/pages/victimsDirectory.css">

<!-- -------------- ⏫ Page top --------------- -->
<?php

    $page_title = "Victim's Directory";

    require_once('views/components/pageTopContents.php');
    require_once('controllers/victims/directory.controller.php');

?>

<!-- -------------- 📄 page content --------------- -->
<div class="container w-50 d-flex justify-content-between px-5 mt-5 mb-3 mx-auto">
    
    <form id="sortDirectoryForm" class="w-50 mx-auto d-flex justify-content-start" method="POST">
        <select name="sort" id="" class="form-select">
            <option value="">-- Sort by --</option>
            <option value="nameAZ">Name (A --> z)</option>
            <option value="nameZA">Name (Z --> a)</option>
            <option value="dateDesc">Date of Death(Desc.)</option>
            <option value="dateAsc">Date of Death (Asc.)</option>
            <option value="ageDesc">Age (Desc.)</option>
            <option value="ageAsc">Age (Asc.)</option>
        </select>
        <input type="submit" value="Sort" class="ms-5 btn" id="sortDirectoryBtn" name="sortBtn">
    </form>
    
</div>

<div id="gallery" class="container-fluid d-flex flex-wrap p-5 justify-content-center">

    <?php foreach ($cards as $article) : ?>

        <a href="/victim-story?id=<?= $article->victim_id; ?>" class="person col-lg-1 col-md-2 col-sm-4">
            <img src="uploads/<?= $article->photo; ?>" 
            alt="<?= $article->first_name." ".$article->last_name; ?>" 
            title="read the article" />
        </a>

    <?php endforeach; ?>
</div>

<!---------------- 📜 scripts used ---------------->
<script src="assets/js/victimsDirectory.js"></script>

<!-- -------------- ⏬ Page Bottom --------------- -->
<?php
    // footer
    require_once('views/components/footer.php'); 
?>
