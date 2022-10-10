<!-- -------- 🎨 page specific stylesheets -------- -->
<link rel="stylesheet" type="text/css" href="assets/css/pages/victimStoryPage.css">

<!-- -------------- ⏫ Page top --------------- -->
<?php

    $page_title = "Her story";

    require_once('views/components/pageTopContents.php');
?>

<!-- -------------- 📄 page content --------------- -->
<main>
<div id="readStoryContainer" class="container d-flex px-4 pt-4">
    <!-- left half -->
    <div id="leftColumnStoryPage" class="rounded-4 p-3">
        <!-- personal info header -->
        <div class="container rounded-3 mx-auto px-5 py-4">
            <h4>Remember :</h4>
            <h1 class="position-relative">
                FIRST_NAME <br />
                LAST_NAME
                <img src="https://img.icons8.com/color/48/000000/saudi-arabia-circular.png"
                    alt="COUNTRY_OF_ORIGIN" title="COUNTRY_OF_ORIGIN" width="30px">
            </h1>
            <p class="detailsSpan">died :
                <span>DATE_OF_DEATH</span>
            </p>
            <p class="detailsSpan">at the age of :
                <span>AGE</span>
            </p>
            <p class="detailsSpan">by :
                <span>KILLER</span>
            </p>
        </div>
        <!-- Crime -->
        <div class="card my-3 mx-auto p-3">
            <div class="card-body">
                <h5 class="card-title">Crime</h5>
                <p class="detailsSpan">
                    Type of crime :
                    <span>TYPE_OF_CRIME</span>
                </p>
                <p class="detailsSpan">
                    Tool used :
                    <span>TOOL_USED</span>
                </p>
                <p class="detailsSpan">
                    Took place in :
                    <span>COUNTRY_OF_DEATH</span>
                </p>
            </div>
        </div>
        <!-- Story -->
        <div class="card my-3 mx-auto p-3">
            <div class="card-body">
                <h5 class="card-title">Story</h5>
                <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, ex qui aut dignissimos
                    expedita rerum, culpa distinctio assumenda laudantium saepe inventore ad, quod perferendis
                    minima. Voluptas esse at a provident.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum tempora nobis ipsum quidem
                    enim excepturi maiores non, inventore, neque, vel aliquam. Ut, consectetur dicta pariatur
                    quasi repudiandae tenetur iste fugiat.
                </p>
            </div>
        </div>
        <!-- Punishment -->
        <div class="card my-3 mx-auto p-3">
            <div class="card-body">
                <h5 class="card-title">
                    Criminal's fate :
                </h5>
                <p class="card-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, ex qui aut dignissimos
                    expedita rerum, culpa distinctio assumenda laudantium saepe inventore ad, quod perferendis
                    minima. Voluptas esse at a provident.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum tempora nobis ipsum quidem
                    enim excepturi maiores non, inventore, neque, vel aliquam. Ut, consectetur dicta pariatur
                    quasi repudiandae tenetur iste fugiat.
                </p>
            </div>
        </div>
    </div>
    <!-- right half -->
    <div id="rightColumnStoryPage" class="pt-5 px-4">
        <div id="victimPhotoContainer" class="">
            <img src="assets/images/examples/Iman-Arshid.jpg" alt="naira" title="" id="victimPhotoImg">
        </div>
    </div>
    <img src="assets/images/blackRibbon.png" alt="Black Ribbon" title="BlackRibbon" width="7%"
        height="auto" id="blackRibbon">
</div>
<!-- Modal to display the photo -->
<div id="personalPicModal" class="modal">
    <span class="close" id="closeModal"> x </span>
    <img id="modalImage" class="modal-content m-auto">
    <div id="caption" class="m-auto"></div>
</div>

</main>
<!-- -------------- ⏬ Page Bottom --------------- -->
<?php
    // footer
    require_once('views/components/footer.php'); 
?>

<!---------------- 📜 scripts used ---------------->
<script src="assets/js/victimStoryPage.js"></script>