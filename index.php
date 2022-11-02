<?php

$path = $_SERVER['REQUEST_URI'];
// ANCHOR search what is request_uri and htaccess explanation

// define an id variable
$getId = isset($_GET['id']) ? $_GET['id'] : false;
$errorMessage = isset($_GET['error']) ? $_GET['error'] : '';

// Routing pages
switch ($path) {
    case '/':
        require_once("./views/pages/landingPage.php");
    break;
    // ------------------- Victim
    case '/add-victim':
        require_once("./views/pages/addVictim.php");
    break;
    case '/add-victim?added=1':
        require_once("./views/pages/addVictim.php");
    break;
    case '/victims-directory':
        require_once("./views/pages/victimsDirectory.php");
    break;
    case '/victim-story?id='.$getId:
        require_once("./views/pages/victimStory.php");
    break;
    // ------------------- admins
    case '/admin-login':
        // $signup = $path[1];
        require_once("./views/pages/adminLogin.php");
    break;
    case '/admin-login?error='.$errorMessage:
        require_once("./views/pages/adminLogin.php");
    break;
    case '/admin-login?signup=1':
        require_once("./views/pages/adminLogin.php");
    break;
    case '/admin':
        require_once("./views/pages/back-office/admin.php");
        break;
    case '/admin/dashboard':
        require_once("./views/pages/back-office/dashboard.php");
        break;
    case '/admin/dashboard?deleted=1':
        require_once("./views/pages/back-office/dashboard.php");
        break;
    case '/admin/dashboard?updated=1':
        require_once("./views/pages/back-office/dashboard.php");
        break;
    case '/admin/manage-article?id='.$getId:
        require_once("./views/pages/back-office/update.php");
    break;
    case '/admin/read-article?id='.$getId:
        require_once("./views/pages/back-office/readArticle.php");
    break;
    case '/admin/add-victim':
        require_once("./views/pages/back-office/adminAdd.php");
        break;
    case '/admin/settings':
        require_once("./views/pages/back-office/adminSettings.php");
        break;
    // ------------------- Other pages
    case '/eulogy':
        require_once("./views/pages/eulogyPage.php");
    break;
    case '/about':
        require_once("./views/pages/about.php");
    break;
    case '/legal-mentions';
        require_once("./views/pages/legalMentionsPage.php");
    break;
    // for predefined error messages
    case '/error?error='.$errorMessage:
        require_once("./views/pages/error.php");
        break;

    default:
        require_once("./views/pages/error.php");
        break;
} 
    
?>
