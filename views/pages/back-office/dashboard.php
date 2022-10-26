<?php   
    // -- -------------- ⏫ Page top --------------- --
    $title = "dashboard";
    require_once('views/components/back-office/top.php');
?>

<!-- -------- 🎨 page specific stylesheets -------- -->
<link rel="stylesheet" type="text/css" href="assets/css/back-office/dashboard.css">

<!-- -------------- 📄 page content --------------- -->
<?php if (isset($_SESSION['userID'])) : ?>

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
            <!-- foreach table goes in here -->
        </tbody>
    </table>
</div>

<!---------------- 📜 scripts used ---------------->
<script src="assets/js/back-office/adminDashboard.js"></script>

<!-- -------------- ⏬ Page Bottom --------------- -->
<?php require_once('views/components/back-office/footer.php'); ?>

<?php endif; ?>