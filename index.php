<?php

$path = $_SERVER['REQUEST_URI'];
// ANCHOR search what is request_uri and htaccess explanation

// Routing pages
switch ($path) {
    case '/home':
        require_once("./views/pages/landingPage.php");
    break;
    // ------------------- Victim
    case '/add-victim':
        require_once("./views/pages/addVictim.php");
    break;
    case '/victims-directory':
        require_once("./views/pages/victimsDirectory.php");
    break;
    case '/victim-story':
        require_once("./views/pages/victimStory.php");
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
    // ------------------- admins
    case '/admin-login':
        require_once("./views/pages/adminLogin.php");
    break;
    case '/admin':
        require_once("./views/pages/back-office/admin.php");
        break;
    case '/admin/dashboard':
        require_once("./views/pages/back-office/dashboard.php");
        break;
    case '/admin/add-victim':
        require_once("./views/pages/back-office/adminAdd.php");
        break;
    case '/admin/settings':
        require_once("./views/pages/back-office/adminSettings.php");
        break;
    case '/ERROR':
        require_once("./views/pages/error.php");
        break;
    // ------------------- 
    default:
        require_once("./views/pages/landingPage.php");
} 
    
?>
