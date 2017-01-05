<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once __DIR__ .'/../vendor/autoload.php';
//require_once __DIR__ .'/../src/MainController.php';
use itb\MainController;
use itb\AdminController;
use itb\LoginController;
// read declarations of the page controller functions
//require_once __DIR__ .'/../src/MainController.php';
//require_once __DIR__ .'/../src/User.php';
//require_once __DIR__ .'/../src/UserRepository.php';
// get value from action parameter
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
$mainController = new MainController();
$adminController = new AdminController();
$loginController = new LoginController();
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
    case 'logout':
        $loginController->logoutAction();
        break;
    case 'processLogin':
        $loginController->processLoginAction();
        break;
    case 'adminCodes':
        $adminController->adminCodesAction();
        break;
    case 'showProduct':
        $mainController->show_one_product_action();
        break;
    case 'adminHome':
        $adminController->adminHomeAction();
        break;
    case 'delete':
        $adminController->delete_product_action();
        break;
    case 'showNewProductForm':
        $adminController->show_new_product_form_action();
        break;
    case 'createNewProduct':
        $adminController->create_product_action();
        break;
    case 'login':
        $mainController->login_action();
        break;

    case 'index':
    default:
        // default is home page ('index' action)
        $mainController->index_action();
}

