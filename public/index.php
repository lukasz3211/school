<?php
require_once __DIR__ .'/../vendor/autoload.php';
use itb\MainController;

// read declarations of the page controller functions


//require_once __DIR__ .'/../src/MainController.php';
//require_once __DIR__ .'/../src/User.php';
//require_once __DIR__ .'/../src/UserRepository.php';
// get value from action parameter
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
$mainController = new MainController();
// based on value (if any) of 'action' decide which template to output
switch ($action){
    case 'aboutus':
        $mainController->aboutus_action();
        break;
    case 'contact':
        $mainController->contact_action();
        break;
    case 'buy':
        $mainController->buy_action();
        break;
    case 'sitemap':
        $mainController->sitemap_action();
        break;
    case 'processLogin':
        $mainController->processLoginAction();
        break;
    case 'login':
        $mainController->login_action();
        break;
    case 'index':
    default:
        // default is home page ('index' action)
        $mainController->index_action();
}

