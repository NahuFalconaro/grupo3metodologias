<?php

require_once "./Model/UserModel.php";
require_once "./Model/View.php";

class UserController{

    private $view;
    private $model;
    private $modelUser;

    function __construct(){
        $this->view = new UserView();
        $this->model = new UserModel();
    }

    function getAccess(){
        session_start();
        if(isset($_SESSION['ID_USER'])){
            $loged = $this->model->getUser($_SESSION['ID_USER']);
            return $loged->access;
        }else{
            return 0;
        }
    }

    function Login(){
        $this->view->ShowLogin();
    }

    function Logout(){
        session_start();
        session_destroy();
        header("Location: ".BASE_URL);

    }

    public function verifyUser(){
       $user = $_POST['user'];
       $pass = $_POST['pass']; 
       $username = $this->model->getPassword($user);
       if(!empty($user) && !empty($pass)&& !(empty($username))){    
            if(password_verify($pass, $username->pass)){
                session_start();
                $_SESSION['ID_USER'] = $username->id_user;
                $_SESSION['USERNAME'] = $username->user;
                $_SESSION['LAST_ACTIVITY'] = time();
                $this->view->ShowHomeLogged();
            }else
                $this->view->ShowErrorPass();
        }else
            $this->view->ShowErrorEmptyFields();
    }

}


?>