<?php

    // -- -------------- ⏫ Page top --------------- --

    if ( isset($_GET['error'] ) )
    {
        $page_title = "ERROR";
    }
    else
    {
        $page_title = "404";
    }

    //-- -------------- Top --------------- --//
    require_once('views/components/top.php');
    //-- ---------- Navigation bar ----------- --//
    require_once('views/components/navbar.php');

    include_once('./controllers/errorMessages.php');
?>

<!-- -------- 🎨 page specific stylesheets -------- -->
<link rel="stylesheet" href="./../../assets/css/pages/errorPage.css">

<!-- -------------- 📄 page content --------------- -->
<main>
<!-- header for admin disclaimer -->
<div id="errorContainer" class="container px-0 pb-3 mb-5 ">

        <div class="container card w-50 mx-auto mt-5 p-5">
<!-- if 404 -->
<!-- if other error, display message -->
<?php if (isset($_GET['error'])): ?>

            <h1 class="text-center p-3 fw-bold">Ooops !</h1>

            <div class="alert alert-danger p-3 m-auto" role="alert" id="error">
                <?= $errorMessage; ?>
            </div>

<?php else : ?>
<!-- ------------------------------ -->
            <h1 class="text-center px-3 fw-bold">404</h1>

            <div class="alert alert-danger p-3 w-75 text-center m-auto" role="alert" id="error">
                Oh no ! <br/>
                This page does not exist.<br/>
            </div>

<?php endif; ?>
<!-- ------------------------------ -->
            <div class="d-flex justify-content-center">
                <a href="/" class="btn btn-secondary m-3">Home Page</a>
                <a href="" class="btn btn-secondary m-3" id="goBack">Go back</a>
            </div>

        </div>


</div>

</main>


<!-- -------------- ⏬ Page Bottom --------------- -->
<?php
    // footer
    include_once('views/components/footer.php'); 
?>

<!---------------- 📜 scripts used ---------------->

<script>
    // go back button
    goBack.addEventListener('click', ()=> {
        history.go(-1);
    });
</script>