<?php
namespace itb;
class MainController
{
    private $loginController;

    public function __construct()
    {
    $this->loginController=new LoginController();
    }
    function aboutus_action()
    {
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        $username = $this->loginController->usernameFromSession();
        require_once __DIR__ . '/../templates/aboutus.php';
    }

    function contact_action()
    {
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        $username = $this->loginController->usernameFromSession();
        require_once __DIR__ . '/../templates/contact.php';
    }

    function buy_action()
    {
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        $username = $this->loginController->usernameFromSession();
        require_once __DIR__ . '/../templates/buy.php';
    }

    function sitemap_action()
    {
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        $username = $this->loginController->usernameFromSession();
        require_once __DIR__ . '/../templates/sitemap.php';
    }

    function index_action()
    {
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        $username = $this->loginController->usernameFromSession();
        require_once __DIR__ . '/../templates/index.php';
    }

    function login_action()
    {
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        $username = $this->loginController->usernameFromSession();
        require_once __DIR__ . '/../templates/loginForm.php';

    }
    function show_one_product_action()
    {
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        $username = $this->loginController->usernameFromSession();
        $connection = get_connection();

        $id = filter_input(INPUT_GET, 'product_id', FILTER_SANITIZE_NUMBER_INT);
        $product = get_one_product_by_id($connection, $id);

        if(null == $product){
            $message = 'sorry, no product with id = ' . $id . ' could be retrieved from the database';

            // output the detail of product in HTML table
            require_once __DIR__ . '/../templates/message.php';
        } else {
            // output the detail of product in HTML table
            require_once __DIR__ . '/../templates/detail.php';
        }
    }


}