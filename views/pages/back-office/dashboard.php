<?php   
    // -- -------------- ⏫ Page top --------------- --
    $title = "dashboard";
    require_once('views/components/back-office/top.php');
    require_once('controllers/back-office/adminDashboard.php');

?>

<!-- -------- 🎨 page specific stylesheets -------- -->
<link rel="stylesheet" type="text/css" href="./../../../assets/css/back-office/dashboard.css">

<!-- -------------- 📄 page content --------------- -->
<?php if (isset($_SESSION['userID'])) : ?>

<div id="tableContainer" class="container">
    <div class="container w-75 p-2 mb-5 rounded">
        <h4 class="text-center p-2 fw-bold">-- All articles --</h4>
        <hr>

        <?php if (isset($_GET['deleted']) && $_GET['deleted'] == 1) : ?>
            
        <div class="alert alert-success alert-dismissible w-75 mx-auto d-flex justify-content-between align-items-center">
        ✅ Entry was deleted successfully
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <?php else : ?>

        <div class="alert alert-info alert-dismissible w-75 mx-auto d-flex justify-content-between align-items-center">
        👩🏽‍💻 Validate, modify, delete a pending article, or add a new one !
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="alert alert-warning alert-dismissible w-75 mx-auto d-flex justify-content-between align-items-center">
        💡 Please check if the article exists already before approving
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <?php endif; ?>

    </div>

    <table class="table" id="table" data-order='[[0, "des"]]' data-page-length="25">
        <thead>
            <tr>
                <th scope="col">Date Created</th>
                <th scope="col">Name</th>
                <th scope="col">Status</th>
                <th scope="col">Modify</th>
                <th scope="col">Delete</th>
            </tr>
            <?php foreach($database as $article): ?>

                <?php 
                    // --------------- is enabled ?
                    $status = ($article->is_enabled == 1 &&
                                $article->enabled_by !== 1) ? 
                    "<span class='green fw-bold'>✅ On site</span>" : 
                    "<span class='yellow fw-bold'>⏳ Pending</span>" ;    
                ?>
                <!-- create a row for each article -->
                <tr>
                    <td>
                        <?= $article->post_creation_date; ?>
                    </td>
                    <td>
                        <a href="/admin/article?id=<?= $article->victim_id; ?>" 
                            title="Read the article">
                            <?= $article->first_name . " " . $article->last_name; ?>
                        </a>
                    </td>
                    <td>
                        <?= $status; ?>
                    </td>
                    <!-- allow modifications only if article is not yet online -->
                    <?php if ($article->is_enabled == 0) : ?>
                    <td>
                        <a href="./../../../views/pages/back-office/update?id=<?= $article->victim_id ?>" 
                            type="submit" class="btn py-0" >
                            <img src="./../../../assets/icons/back-office/edit.png" 
                                alt="edit" width="20px">
                        </a>
                    </td>
                    <td>
                        <a href="./../../../controllers/victims/delete.php?id=<?= $article->victim_id ?>" 
                            type="submit" class="btn py-0" onclick="return confirm('⚠ This action is irreversible')">
                            <img src="./../../../assets/icons/back-office/trash.png" 
                                alt="delete" width="20px">
                        </a>
                    </td>
                    <?php endif; ?>
                </tr>

            <?php endforeach; ?>
        </thead>

    </table>
</div>


<!-- -------------- ⏬ Page Bottom --------------- -->
<?php require_once('views/components/back-office/footer.php'); ?>

<!---------------- 📜 scripts used ---------------->
<script type="application/javascript" src="./../../../assets/js/back-office/adminDashboard.js"></script>

<?php endif; ?>