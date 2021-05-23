<?php
    require_once  "model/MaterialModel.php";
    require_once  "UserController.php";
    require_once  "view/View.php";

    class MaterialController
    {
        private $modelMaterial;
        private $view;
        private $userController;

        function __construct(){
            $this->modelMaterial = new MaterialModel();
            $this->view = new View();
            $this->userController = new UserController();
        }
        
        function showMateriales($params = null){
            $materiales = $this->modelMaterial->getMateriales(); 
            $logged = $this->userController->getAccess();   
            $this->view->showMateriales($materiales, $logged);
        }
        function insertMaterial(){
            $this->userController->verifyUser();
            $nombre = $_POST['nombreInsert'];
            $aceptado = $_POST['aceptadoInsert'];
            $descripcion = $_POST['descripcionInsert'];
            if(!empty($nombre) && !empty($aceptado) && !empty($descripcion)){
                $this->modelMaterial->insertMaterial($nombre, $aceptado, $descripcion);
                $this->view->showMateriales();
            }else{
                $this->view->showError();
            }
        }
        function deleteMaterial($params = null){
            $this->userController->verifyUser();
            $id = $params[':ID'];
            $this->modemodelMateriall->deleteMaterial($id);
            $this->view->ShowHomeLocation();
        }
        
        function updateMaterial($params = null){
            $this->userController->verifyUser();
            $id_material = $params[':ID'];
            $nombre = $_POST['nombreUpdate'];
            $aceptado = $_POST['aceptadoUpdate'];
            $descripcion = $_POST['descripcionUpdate'];
            $existeMaterial = $this->modelMaterial->getMaterial($id_material);
            if(!empty($existeMaterial)){
                if(isset($nombre) && isset($aceptado) && isset($descripcion)){
                    $this->model->updateMaterial($id, $nombre, $aceptado, $descripcion); 
                }
            }else{
                $this->view->showError();
            }
    }




    }