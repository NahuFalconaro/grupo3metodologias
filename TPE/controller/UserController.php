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
        $apellido = $_POST["apellido"];
        $telefono = $_POST["telefono"];
        $email = $_POST["email"];
        $direccion = $_POST["direccion"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $clase_vehiculo = $_POST["clase_vehiculo"];
        $rol = $_POST["user_role"];

        $this->modelUser->updateUser($key, $dni, $nombre, $apellido,  $telefono, $email, $direccion, $fecha_nacimiento, $clase_vehiculo, $rol);
        $this->view->ShowUsersLocation();
    }

    function addUser()
    {
        $dni = $_POST["dni"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $telefono = $_POST["telefono"];
        $email = $_POST["email"];
        $direccion = $_POST["direccion"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $clase_vehiculo = $_POST["clase_vehiculo"];
        $rol = $_POST["user_role"];

        $this->modelUser->addUser($dni, $nombre, $apellido, $telefono, $email, $direccion, $fecha_nacimiento, $clase_vehiculo, $rol);
        $this->abmUsuarios();
    }

    function deleteUser($params = null)
    {
        $key = $params[":ID"];
        $this->modelUser->deleteUser($key);
        $this->view->ShowUsersLocation();
    }

    function checkCredentials()
    {
        session_start();
        if (isset($_SESSION['ID_USER'])) {
            return true;
        } else $this->view->ShowHome(0);
    }
}
