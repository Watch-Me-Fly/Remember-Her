<?php 
    require_once('controllers/victims/carousel.php');
?>

<!-- -------- 🎨 page specific stylesheets -------- -->
<link rel="stylesheet" type="text/css" href="assets/css/carousel.css">

<!-- -------------- 📄 page content --------------- -->
<!-- <h2 id="latest">Latest</h2> -->
<div class="container" id="slideshow-container">
    <!-- images are connected to radio buttons as their labels -->

    <!-- radio buttons start -->
    <input type="radio" name="slider-btn" id="item-1" checked>
    <input type="radio" name="slider-btn" id="item-2">
    <input type="radio" name="slider-btn" id="item-3">
    <input type="radio" name="slider-btn" id="item-4">
    <!-- radio buttons end -->

    <!-- images carousel start -->
    <div class="cards">
        <!-- get latest 4 articles -->

        <label class="card" for="item-1" id="victim-1">
            <a href='/victim-story?id=<?= $cards[0]->victim_id; ?>'>
                <img src="uploads/<?= $cards[0]->photo; ?>"
                    alt="<?= $cards[0]->first_name.
                    " ".$cards[0]->last_name; ?>" 
                    title="read the article">
                <span>
                    <?= $cards[0]->first_name.
                    " ".$cards[0]->last_name.
                    " (".$cards[0]->age; ?>
                    years old )
                </span>
            </a>
        </label>
        <label class="card" for="item-2" id="victim-2">
            <a href='/victim-story?id=<?= $cards[1]->victim_id; ?>'>
                <img src="uploads/<?= $cards[1]->photo; ?>"
                    alt="<?= $cards[1]->first_name.
                    " ".$cards[1]->last_name; ?>" 
                    title="read the article">
                <span>
                    <?= $cards[1]->first_name.
                    " ".$cards[1]->last_name.
                    " (".$cards[1]->age; ?>
                    years old )
                </span>
            </a>
        </label>
        <label class="card" for="item-3" id="victim-3">
            <a href='/victim-story?id=<?= $cards[2]->victim_id; ?>'>
                <img src="uploads/<?= $cards[2]->photo; ?>"
                    alt="<?= $cards[2]->first_name.
                    " ".$cards[2]->last_name; ?>" 
                    title="read the article">
                <span>
                    <?= $cards[2]->first_name.
                    " ".$cards[2]->last_name.
                    " (".$cards[2]->age; ?>
                    years old )
                </span>
            </a>
        </label>
        <label class="card" for="item-4" id="victim-4">
            <a href='/victim-story?id=<?= $cards[3]->victim_id; ?>'>
                <img src="uploads/<?= $cards[3]->photo; ?>"
                    alt="<?= $cards[3]->first_name.
                    " ".$cards[3]->last_name; ?>" 
                    title="read the article">
                <span>
                    <?= $cards[3]->first_name.
                    " ".$cards[3]->last_name.
                    " (".$cards[3]->age; ?>
                    years old )
                </span>
            </a>
        </label>
    </div>
    <!-- images carousel end -->

    <!-- automatic navigation start -->
    <div class="navigation-manual">
        <label for="item-1" class="manual-btn"></label>
        <label for="item-2" class="manual-btn"></label>
        <label for="item-3" class="manual-btn"></label>
        <label for="item-4" class="manual-btn"></label>
    </div>
    <!-- automatic navigation end -->

    <!-- manual navigation start -->
    <div class="navigation-auto">
        <div class="auto-btn1"></div>
        <div class="auto-btn2"></div>
        <div class="auto-btn3"></div>
        <div class="auto-btn4"></div>
    </div>
    <!-- manual navigation end -->

</div>