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
            $logged = $this->userController->getAccess(); 
            $nombre = $_POST['nombre'];
            $aceptado = $_POST['aceptado'];
            $descripcion = $_POST['descripcion'];
            if(!empty($nombre)){// la descripcion no es necesaria si el material no es aceptado
                $this->modelMaterial->insertMaterial($nombre, $aceptado, $descripcion);
                $materiales = $this->modelMaterial->getMateriales();
                $this->view->ShowHomeLocation(); // arreglar porque tira error
            }else{
                $this->view->showError();
            }
        }
        function deleteMaterial($params = null){
            //$logged = $this->userController->getAccess();
            $id = $params[':ID'];
            $this->modelMaterial->deleteMaterial($id);
            $this->view->ShowHomeLocation();
        }
        
        function updateMaterial($params = null){
            //$this->userController->verifyUser();
            $id_material = $params[':ID'];
            $nombre = $_POST['nombreUpdate'];
            $aceptado = $_POST['aceptadoUpdate'];
            $descripcion = $_POST['descripcionUpdate'];
                if(isset($nombre) && isset($aceptado)){
                    $this->modelMaterial->updateMaterial($id_material, $nombre, $aceptado, $descripcion); 
                    $this->view->ShowHomeLocation();
                }
            }

        function getEditMaterial($params = null){
            $id_materiales = $params[':ID'];
            $Material = $this->modelMaterial->getMaterial($id_materiales);
            $this->view->showUpdateMaterial($Material);
        }



    }