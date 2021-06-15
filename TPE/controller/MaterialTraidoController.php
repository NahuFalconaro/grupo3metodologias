<?php
    require_once  "model/MaterialTraidoModel.php";
    require_once  "UserController.php";
    require_once  "view/View.php";

    class MaterialController
    {
        private $modelMaterialTraido;
        private $view;
        //private $userController;

        function __construct(){
            $this->modelMaterialTraido = new MaterialTraidoModel();
            $this->view = new View();
            //$this->userController = new UserController();
        }
        function insertMaterialTraido(){//Inserta el material traido por vecinos o cartoneros
            //$logged = $this->userController->getAccess(); 
            $id_material = $_POST['id_materialTraido'];
            $peso = $_POST['pesoTraido'];
            $id_usuario = $_POST['id_usuario'];
            if(!empty($id_material) && !empty($peso)){// la descripcion no es necesaria si el material no es aceptado
                if(!empty($id_usuario)){
                    $this->modelMatmodelMaterialTraidoerial->insertMaterialTraido($id_material, $peso, $id_usuario);
                }else{
                    $pesoVecino = $this->modelMaterialTraido->getPesoVecinoBuenaOnda();
                    $this->modelMaterialTraido->insertMaterialTraido($id_material, $peso + $pesoVecino, 2);//2 siendo el usuario de vecino buena onda
                }
                $materiales = $this->modelMaterialTraido->getMateriales();
                $this->view->ShowMaterialTraido($materiales);
            }else{
                $this->view->showError();
            }
        }
    }