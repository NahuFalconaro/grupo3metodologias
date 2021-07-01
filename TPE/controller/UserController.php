<?php

require_once "model/UserModel.php";
require_once  "view/View.php";
class UserController
{


    private $modelUser;
    private $view;

    function __construct()
    {
        $this->view = new View();
        $this->modelUser = new UserModel();
    }

    //verifica si el usuario esta logeado y si lo está, se fija si es admin o no

    function getAccess()
    {
        session_start();
        if (isset($_SESSION['ID_USER'])) {
            $loged = $this->modelUser->getUser($_SESSION['ID_USER']);
            return $loged->admin;
        } else {
            return 0;
        }
    }
    //muestra la view de login
    function Login()
    {
        $this->view->ShowLogin();
    }

    //cierra la sesion y redirige a home
    function logout()
    {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }

    //verifica que el usuario y contraseña sean correctas
    public function verifyUser()
    {
        $user = $_POST['dni'];
        $pass = $_POST['password'];


        $username = $this->modelUser->getUser($user);

        // $encrypt = password_hash($pass, PASSWORD_DEFAULT); password_verify encripta con Bcrypt

        if (!empty($user) && !empty($pass) && !(empty($username))) {

            if (password_verify($pass, $username->pass) == true) {

                session_start();
                $_SESSION['ID_USER'] = $username->dni;
                $_SESSION['USERNAME'] = $username->usuario;
                $this->view->ShowDashboardLocation();
            } else
                $this->view->ShowHome(0);
        }
    }

    function showDashboard()
    {
        $this->checkCredentials();
        $this->view->showDashboard();
    }

    function abmUsuarios()
    {
        $this->checkCredentials();
        $users = $this->modelUser->getAllUsers();
        $this->view->showAbmUsuarios($users);
    }

    function modifyUser($params = null)
    {
        $key = $params[":ID"];
        $dni = $_POST["dni"];
        $nombre = $_POST["nombre"];
        $rol = $_POST["user_role"];

        $this->modelUser->updateUser($key, $dni, $nombre, $rol);
        print(1);
    }

    function addUser()
    {
        $dni = $_POST["dni"];
        $nombre = $_POST["nombre"];
        $rol = $_POST["user_role"];

        $this->modelUser->addUser($dni, $nombre, $rol);
        print(50);
    }

    function deleteUser($params = null)
    {
        print("QUE ONDAAA");
        die();

        $key = $params[":ID"];
        // $this->modelUser->deleteUser($key);
        print($key);
    }

    function prueba(){
        print("Wat");
    }


    function checkCredentials()
    {
        session_start();
        if (isset($_SESSION['ID_USER'])) {
            return true;
        } else $this->view->ShowHome(0);
    }
}
