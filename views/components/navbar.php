<?php require_once('controllers/searchBar.php'); ?>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fw-semibold">
<div class="container-fluid d-flex flex-row 
            p-1 align-items-center">
    <div class="container 
                d-flex justify-content-between 
                col-sm-12 col-md-1">
        <a href="/" class="btn">
            <img src="assets/icons/dark-mode/home.png" alt="Home" title="Home" width="20px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div id="searchbar" class="container col-sm-12 col-md-3">
        <form action="" method="GET" class="d-flex justify-content-center">
            <input type="text" name="searchbox" id="" class="search-box form-control me-2">
            <input type="submit" value="Search" class="btn btn-secondary" name="search">
        </form>
        <div class="result">

        </div>
    </div>
    <div class="collapse navbar-collapse 
                col-sm-12 col-md-4 col-lg-4" id="navbarNavDropdown">
        <ul class="navbar-nav d-flex flex-row justify-content-evenly">
            <li class="nav-item">
                <a href="/victims-directory" class="nav-link text-white">
                    Victims
                </a>
            </li>
            <li class="nav-item">
                <a href="/eulogy" class="nav-link text-white">Euology</a>
            </li>
            <li class="nav-item">
                <a href="/about" class="nav-link text-white">About</a>
            </li>
        </ul>
    </div>
    <ul class="navbar-nav 
        d-flex flex-row justify-content-end 
        col-sm-12 col-md-3 col-lg-3">
        <li class="nav-item me-1 ">
            <a href="/add-victim" class="btn btn-secondary">
                <img src="assets/icons/dark-mode/add.png" alt="" width="20px">
                <span>Add</span>
            </a>
        </li>
        <li class="nav-item me-1">
            <a href="/admin-login" class="btn btn-secondary">
                <img src="assets/icons/dark-mode/admin.png" alt="" width="20px">
                <span>Admin</span>
            </a>
        </li>
        <li class="nav-item dropdown me-1">
            <a class="dropdown-toggle btn btn-secondary d-flex justify-content-center align-items-center" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <img src="assets/icons/dark-mode/globe.png" alt="Choose Language" title="Choose Language"
                    width="20px">
            </a>
            <ul class="dropdown-menu bg-secondary">
                <li><a class="dropdown-item d-flex flex-row justify-content-center" href="#"><img
                            src="https://img.icons8.com/color/48/000000/great-britain-circular.png"
                            alt="English" title="English" width="30" />
                    </a></li>
                <li><a class="dropdown-item d-flex flex-row justify-content-center" href="#">
                        <img src="https://img.icons8.com/color/48/000000/france-circular.png" alt="Français"
                            title="Français" width="30" />
                    </a></li>
                <li><a class="dropdown-item d-flex flex-row justify-content-center" href="#">
                        <img src="https://img.icons8.com/color/48/000000/saudi-arabia-circular.png"
                            alt="العربية" title="العربية" width="30" />
                    </a></li>
            </ul>
        </li>
    </ul>
</div>
</nav>