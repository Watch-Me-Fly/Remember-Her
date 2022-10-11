<?php
    session_start();
    $title = $_SESSION['admin'] ."'s dashboard";
?>

<!-- -------- 🎨 page specific stylesheets -------- -->
<link rel="stylesheet" type="text/css" href="assets/css/back-office/dashboard.css">

<!-- -------------- ⏫ Page top --------------- -->
<?php include_once('views/components/back-office/top.php'); ?>

<!-- -------------- 📄 page content --------------- -->
<div id="tableContainer" class="container">
    <table class="table" data-order='[[0, "asc"]]' data-page-length="25">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Date Created</th>
                <th scope="col">Name</th>
                <th scope="col">Approve</th>
                <th scope="col">Modify</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody id="dataTable">

        </tbody>
    </table>
</div>

<!---------------- 📜 scripts used ---------------->
<script src="assets/js/back-office/adminDashboard.js"></script>

<!-- -------------- ⏬ Page Bottom --------------- -->
<?php require_once('views/components/back-office/footer.php'); ?>