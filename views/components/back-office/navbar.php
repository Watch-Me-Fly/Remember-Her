<link rel="stylesheet" type="text/css" href="./../../../assets/css/back-office/navbar.css">

<nav class="nav navbar-expand-lg navbar-light bg-light mb-3 p-1">
    <div class="container-fluid">

        <!-- collapsable button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarComplete"
            aria-controls="navbarComplete" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navbarComplete" class="collapse navbar-collapse">
            <ul class="navbar-nav container-fluid d-flex align-items-center">

                <div id="leftNav" class="col-6 d-flex align-items-center">

                    <li class="nav-item p-2">
                        <img src="./../../../assets/images/logo.png" alt="Remember her" class="p-2" id="logo">
                    </li>
                    <li class="nav-item">
                        <h4 class="fw-bold">Welcome back ${name}</h4>
                    </li>

                </div>

                <div id="rightNav" class="col-6 d-flex align-items-center justify-content-end">

                    <!-- Manage projects -->
                    <li class="nav-item px-3">
                        <a href="./dashboard.html" id="managePosts" class="nav-link btn p-2">
                            ⚙️ Posts
                        </a>
                    </li>

                    <!-- add project button -->
                    <li class="nav-item px-3">
                        <a href="./adminWritePosts.html" id="addProject" class="nav-link btn p-2">
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
                                <a class="dropdown-item rounded-1" href="#">Settings </a>
                            </li>
                            <li class="p-2">
                                <a class="dropdown-item rounded-1" href="#">Log Out</a>
                            </li>
                        </ul>
                    </li>
                </div>

            </ul>
        </div>

    </div>
</nav>

