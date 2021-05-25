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
           // $this->userController->verifyUser();
            $nombre = $_POST['nombre'];
            $aceptado = $_POST['aceptado'];
            $descripcion = $_POST['descripcion'];
            if(!empty($nombre)){// la descripcion no es necesaria si el material no es aceptado
                $this->modelMaterial->insertMaterial($nombre, $aceptado, $descripcion);
                $this->view->showMateriales($materiales, $logged); // arreglar porque tira error
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
            //$this->userController->verifyUser();
            $id_material = $params[':ID'];
            $nombre = $_POST['nombre'];
            $aceptado = $_POST['aceptado'];
            $descripcion = $_POST['descripcion'];
            $existeMaterial = $this->modelMaterial->getMaterial($id_material);
            if(!empty($existeMaterial)){
                if(isset($nombre) && isset($aceptado) && isset($descripcion)){
                    $this->model->updateMaterial($id, $nombre, $aceptado, $descripcion); 
                    $this->view->showUpdateMaterial($params);
                }
            }else{
                $this->view->showError();
            }
        }

        function getEditMaterial($params = null){
            $id_materiales = $params[':ID'];
            $Material = $this->model->getMaterial($id_materiales);
            $this->view->showUpdateMaterial($Material);
        }



    }