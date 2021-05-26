<?php

require_once "model/UserModel.php";
require_once "view/View.php";

class UserController{

    private $view;
    private $model;
    private $modelUser;

    function __construct(){
        $this->view = new View();
        $this->model = new UserModel();
    }

    //verifica si el usuario esta logeado y si lo está, se fija si es admin o no

    function getAccess(){
        session_start();
        if(isset($_SESSION['ID_USER'])){
            $loged = $this->model->getUser($_SESSION['ID_USER']);
            return $loged->admin;
        }else{
            return 0;
        }
    }
    //muestra la view de login
    function Login(){
        $this->view->ShowLogin();
    }
    
    //cierra la sesion y redirige a home
    function Logout(){
        session_start();
        session_destroy();
        header("Location: ".BASE_URL);

    }

    //verifica que el usuario y contraseña sean correctas
    public function verifyUser(){
       $user = $_POST['user'];
       $pass = $_POST['pass']; 
       $username = $this->model->getPassword($user);
       if(!empty($user) && !empty($pass)&& !(empty($username))){ 
           
            $temp = md5($pass); 

            //if(password_verify($temp, $username->pass)){
              if($temp == $username->pass){
                session_start();
                $_SESSION['ID_USER'] = $username->id;
                $_SESSION['USERNAME'] = $username->usuario;
                $_SESSION['LAST_ACTIVITY'] = time();
                $this->view->ShowHomeLocation();
            }else
                $this->view->ShowHome(0);
        }else
            $this->view->ShowHome(0);
    }

}


?>