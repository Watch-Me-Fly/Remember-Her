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
        <label class="card" for="item-1" id="victim-1">
            <img src="https://images.unsplash.com/photo-1646054000472-c7bdb06ca849?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                alt="victim's name" title="victim's name">
            <span>victim 1</span>
        </label>
        <label class="card" for="item-2" id="victim-2">
            <img src="assets/images/examples/Iman-Arshid.jpg" alt="victim's name" title="victim's name">
            <span>Iman Arshid (21 years old)</span>
        </label>
        <label class="card" for="item-3" id="victim-3">
            <img src="assets/images/examples/naira.webp" alt="victim's name" title="victim's name">
            <span>Naira Ashraf (21 years old)</span>
        </label>
        <label class="card" for="item-4" id="victim-4">
            <img src="assets/images/examples//Loulouah-Althouaini.png" alt="victim's name"
                title="victim's name">
            <span>Loulouah Althouaini (17 years old)</span>
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