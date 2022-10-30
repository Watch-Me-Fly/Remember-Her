<?php   
    // -- -------------- ⏫ Page top --------------- --
    $title = "dashboard";
    require_once($_SERVER['DOCUMENT_ROOT'].
                '/views/components/back-office/top.php');
    require_once($_SERVER['DOCUMENT_ROOT'].
                '/controllers/victims/murder.controller.php');
?>
<!-- -------- 🎨 page specific stylesheets -------- -->
<!-- <link rel="stylesheet" type="text/css" href="./../../../assets/css/pages/victimStoryPage.css"> -->
<link rel="stylesheet" type="text/css" href="./../../../assets/css/back-office/adminRead.css">

<!-- -------------- 📄 page content --------------- -->
<?php if (isset($_SESSION['userID'])) : ?>

<div id="readArticle" class="container">

<!-- if article exists -->
<?php if ($article) : ?>

<!-- left half -->
<div id="leftColumnStoryPage" class="rounded-4 p-3">
    <!-- personal info header -->
    <div class="card rounded-3 mx-auto px-5 py-4 d-flex flex-row">
        <div class="container">
            <h4>Remember :</h4>
            <h1 class="position-relative">
                <?= htmlentities($article[0]->first_name). 
                ' '. htmlentities($article[0]->last_name); ?>

                <img src="https://countryflagsapi.com/png/<?= $article[0]->country_origin; ?>"
                    alt="Country of Origin : <?php getCountryByCode($json, $countryOfOrigin) ?>" 
                    title="Country of Origin : <?php getCountryByCode($json, $countryOfOrigin) ?>" 
                    width="30px">

                <div id="links" class="d-flex">
                    <?php if ($article[0]->twitter_hashtag) : ?>
                        <a href="<?= $article[0]->twitter_hashtag; ?>" target="_blank">
                            <img src="./../../../assets/icons/twitter.png" alt="
                        alt="Twitter hashtag" title="Twitter hashtag" width="30px">
                        </a>
                    <?php endif; ?>
                    <?php if ($article[0]->source_1) : ?>
                        <a href="<?= $article[0]->source_1; ?>" target="_blank">
                            <img src="./../../../assets/icons/link.png" alt="
                            alt="Twitter hashtag" title="Source 1" width="30px">
                        </a>
                    <?php endif; ?>
                    <?php if ($article[0]->source_2) : ?>
                        <a href="<?= $article[0]->source_2; ?>" target="_blank">
                            <img src="./../../../assets/icons/link.png" alt="
                            alt="Twitter hashtag" title="Source 2" width="30px">
                        </a>
                    <?php endif; ?>
                    <?php if ($article[0]->source_3) : ?>
                        <a href="<?= $article[0]->source_3; ?>" target="_blank">
                            <img src="./../../../assets/icons/link.png" alt="
                            alt="Twitter hashtag" title="Source 3" width="30px">
                        </a>
                    <?php endif; ?>
                    <?php if ($article[0]->source_4) : ?>
                        <a href="<?= $article[0]->source_4; ?>" target="_blank">
                            <img src="./../../../assets/icons/link.png" alt="
                            alt="Twitter hashtag" title="Source 4" width="30px">
                        </a>
                    <?php endif; ?>
                    <?php if ($article[0]->source_5) : ?>
                        <a href="<?= $article[0]->source_5; ?>" target="_blank">
                            <img src="./../../../assets/icons/link.png" alt="
                            alt="Twitter hashtag" title="Source 5" width="30px">
                        </a>
                    <?php endif; ?>
                </div>

            </h1>
            <p class="detailsSpan">died :
                <span><?= htmlentities($article[0]->date_of_death); ?> </span>
            </p>
            <p class="detailsSpan">at the age of :
                <span><?= htmlentities($article[0]->age); ?> </span>
            </p>
            <p class="detailsSpan">by a/an :
                <span><?= htmlentities($article[0]->relationship); ?> </span>
            </p>
        </div>
        <div id="victimPhotoContainer" class="">
            <img src="./../../../uploads/<?= htmlentities($article[0]->photo); ?>" 
                alt="<?= htmlentities($article[0]->first_name); ?>" 
                title="victim's photo" id="victimPhotoImg">
            <img src="./../../../assets/images/blackRibbon.png" alt="Black Ribbon" title="BlackRibbon" id="blackRibbon">
        </div>
    </div>
    <!-- Crime -->
    <div class="card my-3 mx-auto p-3">
        <div class="card-body">
            <h5 class="card-title">Crime</h5>
            <p class="detailsSpan">
                Reason for crime :
                <span>
                    <?= htmlentities($article[0]->reason_group); ?>
                </span>
            </p>
            <p class="detailsSpan">
                Tool used :
                <span>
                    <?= htmlentities($article[0]->tool_name); ?> 
                </span>
            </p>
            <p class="detailsSpan">
                Took place in :
                <span>
                    <?= getCountryByCode($json, $countryOfCrime); ?> 
                </span>
            </p>
        </div>
    </div>
    <!-- Story -->
    <div class="card my-3 mx-auto p-3">
        <div class="card-body">
            <h5 class="card-title">Story</h5>
            <p class="card-text">
                <?= htmlentities(utf8_encode($article[0]->story)); ?> 
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
                <?= htmlentities(utf8_encode($article[0]->punishment)); ?> 
            </p>
        </div>
    </div>
</div>


<!-- if no article is found -->
<?php else : ?>
<div class="alert alert-danger w-50 mx-auto h-50 text-center" role="alert">
    Article NOT FOUND
</div>
<?php endif; ?>
</div>
<!-- Modal to display the photo -->
<div id="personalPicModal" class="modal">
    <span class="close" id="closeModal"> x </span>
    <img id="modalImage" class="modal-content m-auto">
    <div id="caption" class="m-auto"></div>
</div>
</div>

<!-- -------------- ⏬ Page Bottom --------------- -->
<?php require_once($_SERVER['DOCUMENT_ROOT'].
                    '/views/components/back-office/footer.php'); ?>

<!---------------- 📜 scripts used ---------------->
<script type="application/javascript" src="./../../../assets/js/victimStoryPage.js"></script>

<?php endif; ?>