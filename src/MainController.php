<?php
namespace itb;
class MainController
{


    function aboutus_action()
    {
        require_once __DIR__ . '/../templates/aboutus.php';
    }

    function contact_action()
    {
        require_once __DIR__ . '/../templates/contact.php';
    }

    function buy_action()
    {
        require_once __DIR__ . '/../templates/buy.php';
    }

    function sitemap_action()
    {
        require_once __DIR__ . '/../templates/sitemap.php';
    }

    function index_action()
    {
        require_once __DIR__ . '/../templates/index.php';
    }

    function login_action()
    {
        require_once __DIR__ . '/../templates/loginForm.php';

    }

    function processLoginAction()
    {
        // default is bad login
        $isLoggedIn = false;

        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        $userRepository = new UserRepository();
        $isLoggedIn = $userRepository->canFindMatchingUsernameAndPassword($username, $password);

        // action depending on login success
        if ($isLoggedIn) {
            // success - found a matching username and password
            require_once __DIR__ . '/../templates/loginSuccess.php';
        } else {
            $message = 'bad username or password, please try again';
            require_once __DIR__ . '/../templates/message.php';
        }
    }
}