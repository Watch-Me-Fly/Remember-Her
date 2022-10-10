<!-- -------- 🎨 page specific stylesheets -------- -->
<link rel="stylesheet" type="text/css" href="assets/css/pages/victimsDirectory.css">

<!-- -------------- ⏫ Page top --------------- -->
<?php

    $page_title = "Victim's Directory";

    require_once('views/components/pageTopContents.php');
?>

<!-- -------------- 📄 page content --------------- -->
<div class="container d-flex justify-content-between px-5 mt-5 mb-3">
    <form action="" id="sortDirectoryForm" class="d-flex justify-content-start me-3">
        <select name="" id="" class="form-select">
            <option value="">-- Sort by --</option>
            <option value="">Name (A --> z)</option>
            <option value="">Name (Z --> a)</option>
            <option value="">Date (Desc.)</option>
            <option value="">Date (Asc.)</option>
            <option value="">Age (Desc.)</option>
            <option value="">Age (Asc.)</option>
        </select>
        <input type="submit" value="Sort" class="ms-5 btn" id="sortDirectoryBtn">
    </form>

    <!-- FILTER By country -->
    <form action="" id="filterDirectoryForm" class="d-flex justify-content-end">
        <select name="" id="countryDirectoryFilter" class="form-select">
            <option value="">-- by Country --</option>
        </select>
        <input type="submit" value="Filter" class="ms-5 btn" id="filterDirectoryBtn">
    </form>

</div>

<div id="gallery" class="container-fluid d-flex flex-wrap p-5">
    <a href="" class="person col-lg-1 col-md-2 col-sm-4">
        <img src="assets/images/examples/Iman-Arshid.jpg" alt="" title="">
    </a>
    <a href="" class="person col-lg-1 col-md-2 col-sm-4">
        <img src="assets/images/examples/Iman-Arshid.jpg" alt="" title="">
    </a>
    <a href="" class="person col-lg-1 col-md-2 col-sm-4">
        <img src="assets/images/examples/Iman-Arshid.jpg" alt="" title="">
    </a>
    <a href="" class="person col-lg-1 col-md-2 col-sm-4">
        <img src="assets/images/examples/Iman-Arshid.jpg" alt="">
    </a>
    <a href="" class="person col-lg-1 col-md-2 col-sm-4">
        <img src="assets/images/examples/Iman-Arshid.jpg" alt="">
    </a>
    <a href="" class="person col-lg-1 col-md-2 col-sm-4">
        <img src="assets/images/examples/Iman-Arshid.jpg" alt="">
    </a>
    <a href="" class="person col-lg-1 col-md-2 col-sm-4">
        <img src="assets/images/examples/Iman-Arshid.jpg" alt="">
    </a>
    <a href="" class="person col-lg-1 col-md-2 col-sm-4">
        <img src="assets/images/examples/Iman-Arshid.jpg" alt="">
    </a>
    <a href="" class="person col-lg-1 col-md-2 col-sm-4">
        <img src="assets/images/examples/Iman-Arshid.jpg" alt="">
    </a>
    <a href="" class="person col-lg-1 col-md-2 col-sm-4">
        <img src="assets/images/examples/Iman-Arshid.jpg" alt="">
    </a>
    <a href="" class="person col-lg-1 col-md-2 col-sm-4">
        <img src="assets/images/examples/Iman-Arshid.jpg" alt="">
    </a>
    <a href="" class="person col-lg-1 col-md-2 col-sm-4">
        <img src="assets/images/examples/Iman-Arshid.jpg" alt="">
    </a>
</div>

<!-- -------------- ⏬ Page Bottom --------------- -->
<?php
    // footer
    require_once('views/components/footer.php'); 
?>

<!---------------- 📜 scripts used ---------------->
<script src="assets/js/victimsDirectory.js"></script>