<?php
namespace itb;
class LoginController
{
        public function logoutAction()
    {
        // remove 'user' element from SESSION array
        unset($_SESSION['user']);

        // redirect to index action
        $mainController = new MainController();
        $mainController->index_action();
    }
        function processLoginAction()
        {
            // default is bad login
            $isLoggedIn = false;

            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
            $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

            $isLoggedIn = User::canFindMatchingUsernameAndPassword($username, $password);

            // $userRepository = new UserRepository();
            // $isLoggedIn = $userRepository->canFindMatchingUsernameAndPassword($username, $password);

            // action depending on login success
            if ($isLoggedIn) {
                $_SESSION['user']=$username;
                // success - found a matching username and password
                require_once __DIR__ . '/../templates/loginSuccess.php';
            } else {
                $message = 'bad username or password, please try again';
                require_once __DIR__ . '/../templates/message.php';
            }
        }
        public function isLoggedInFromSession()
    {
        $isLoggedIn = false;

        // user is logged in if there is a 'user' entry in the SESSION superglobal
        if(isset($_SESSION['user'])){
            $isLoggedIn = true;
        }

        return $isLoggedIn;
    }

        public function usernameFromSession()
    {
        $username = '';

        // extract username from SESSION superglobal
        if (isset($_SESSION['user'])) {
            $username = $_SESSION['user'];
        }

        return $username;
    }
}