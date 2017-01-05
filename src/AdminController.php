<?php
namespace itb;
class AdminController
{
    private $loginController;

    public function __construct()
    {
        $this->loginController = new LoginController();
    }

    public function adminHomeAction()
    {
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        if ($isLoggedIn) {
            $username = $this->loginController->usernameFromSession();
            require_once __DIR__ . '/../templates/admin/index.php';
        } else {
            $message = 'UNAUTHORIZED ACCESS - the Guards are on their way to arrest you ...';
            require_once __DIR__ . '/../templates/message.php';
        }
    }

    public function adminCodesAction()
    {
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        if ($isLoggedIn) {
            $username = $this->loginController->usernameFromSession();
            require_once __DIR__ . '/../templates/admin/codes.php';
        } else {
            $message = 'UNAUTHORIZED ACCESS - the Guards are on their way to arrest you ...';
            require_once __DIR__ . '/../templates/message.php';
        }
    }
    function delete_product_action()
    {
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        $connection = get_connection();

        $id = filter_input(INPUT_GET, 'product_id', FILTER_SANITIZE_NUMBER_INT);
        $success = delete_product($connection, $id);

        if($success){
            $message = 'SUCCESS - product with id = ' . $id . ' was deleted';
        } else {
            $message = 'sorry, product id = ' . $id . ' could not be deleted';
        }

        require_once __DIR__ . '/../templates/message.php';
    }
    function show_new_product_form_action()

    {
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        require_once __DIR__ . '/../templates/admin/new_product_form.php';
    }

    function create_product_action()
    {
        $isLoggedIn = $this->loginController->isLoggedInFromSession();
        $connection = get_connection();
        //('$ProductCode', $Name, $ProductDesc, $ProductImage, $Price, $StockNum)
        $ProductCode= filter_input(INPUT_POST, 'ProductCode', FILTER_SANITIZE_STRING);
        $Name= filter_input(INPUT_POST, 'Name', FILTER_SANITIZE_STRING);
        $ProductDesc = filter_input(INPUT_POST, 'ProductDesc', FILTER_SANITIZE_STRING);
        $ProductImage = filter_input(INPUT_POST, 'ProductImage', FILTER_SANITIZE_STRING);
        $Price = filter_input(INPUT_POST, 'Price', FILTER_SANITIZE_NUMBER_FLOAT);
        $StockNum= filter_input(INPUT_POST, 'StockNum', FILTER_SANITIZE_STRING);


        $success = create_product($connection, $ProductCode, $Name, $ProductDesc, $ProductImage, $Price, $StockNum);

        if($success){
            $id = $connection->lastInsertId();
            $message = "SUCCESS - new product with ID = $id created";
        } else {
            $message = 'sorry, there was a problem creating new product';
        }

        require_once __DIR__ . '/../templates/message.php';
    }
}