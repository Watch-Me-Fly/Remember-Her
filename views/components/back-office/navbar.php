<?php

    require_once($_SERVER['DOCUMENT_ROOT'].
                    '/models/admin.class.php');
    
    /*--------------------------------------------
    *           Retrieve user's info
    *---------------------------------------------*/
    $what = "*";
    $whereCondition = "admin_id= '".$_SESSION['userID']."'";
    $userInfo = AdminCRUD::readWhere($what, $whereCondition, null);

?>

<link rel="stylesheet" type="text/css" href="./../../../assets/css/back-office/admin.css">
<link rel="stylesheet" type="text/css" href="./../../../assets/css/back-office/navbar.css">

<nav class="nav navbar-expand-md navbar-light bg-light mb-3 p-1">
    <div class="container-fluid d-flex">
        <div id="leftNav" class="w-100 d-flex">
            <!-- collapsable button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarComplete"
                aria-controls="navbarComplete" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon d-flex align-items-center">
                    <img src="./../../../assets/icons/back-office/options.png" alt="">
                </span>
            </button>

            <div class="d-flex align-items-center">
                <li class="nav-item p-2">
                    <a href="/">
                    <img src="./../../../assets/images/logo.png" alt="Remember her" class="p-2" id="logo">
                    </a>
                </li>
                <li class="nav-item">
                    <h4 class="fw-bold">Welcome back <?= $userInfo[0]->username; ?> !</h4>
                </li>

            </div>
        </div>
        
        <div id="navbarComplete" class="collapse navbar-collapse">
            <ul id="rightNav" class="navbar-nav container-fluid d-flex flex-row align-items-center justify-content-end">

                <!-- Manage projects -->
                <li class="nav-item px-3">
                    <a href="/admin/dashboard" id="managePosts" class="nav-link btn p-2">
                        ⚙️ Posts
                    </a>
                </li>

                <!-- add project button -->
                <li class="nav-item px-3">
                    <a href="/admin/add-victim" id="addProject" class="nav-link btn p-2">
                        📝 Add
                    </a>
                </li>

                <!-- notifications icon -->
                <li class="nav-item px-3">
                    <a href="" class="nav-link">
                        <img src="./../../../assets/icons/back-office/notifications.png" alt="notifications"
                            title="Notifications">
                    </a>
                </li>

                <!-- profile drop down w/image -->
                <li class="nav-item dropdown px-3" id="profileMenu">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="./../../../assets/icons/back-office/profile.png" alt="">
                    </button>
                    <ul class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton1">
                        <li class="p-2">
                            <a class="dropdown-item rounded-1" href="/admin/settings">Settings </a>
                        </li>
                        <li class="p-2">
                            <a class="dropdown-item rounded-1" href="./../../../controllers/back-office/logout.php">Log Out</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>

    </div>
</nav>