<!-- -------- 🎨 page specific stylesheets -------- -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- stylesheets used through all pages -->
    <?php include_once('./../../../assets/css/back-office/stylesheet.php'); ?>
    <title><?= $title ?></title>
</head>

<body>

    <!-- -----------------Navigation------------------ -->
    <?php include_once('./../../components/back-office/navbar.php'); ?>

    <!-- -----------------Main------------------ -->
    <main>
       <?= $pageContent ?>
    </main>
    <!-- -----------------Footer------------------ -->
    <footer class="container-fluid">
        <hr>
        <p class="text-muted">© 2022 by Saja ALHAYAN</p>
    </footer>

    <!-- -----------------JS scripts------------------ -->
    <?php include_once('./../../../assets/js/back-office/script.php'); ?>

</body>

</html>