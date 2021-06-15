<?php
    require_once  "model/MaterialTraidoModel.php";
    require_once  "model/MaterialModel.php";
    require_once  "UserController.php";
    require_once  "view/View.php";

    class MaterialTraidoController
    {
        private $modelMaterialTraido;
        private $modelMaterial;
        private $view;
        //private $userController;

        function __construct(){
            $this->modelMaterialTraido = new MaterialTraidoModel();
            $this->modelMaterial = new MaterialModel();
            $this->view = new View();
            //$this->userController = new UserController();
        }

        function getBalanza(){
            $Materiales = $this->modelMaterial->getMaterialesAceptados();
            $this->view->showBalanza($Materiales);
        }

        function insertMaterialTraido(){//Inserta el material traido por vecinos o cartoneros
            //$logged = $this->userController->getAccess(); 
            $id_material = $_POST['id_materialTraido'];
            $peso = $_POST['pesoTraido'];
            $id_usuario = $_POST['id_usuario'];
            $material = $this->modelMaterial->getMaterial($id_material);
            //if(!empty($material)){// la descripcion no es necesaria si el material no es aceptado
                    if(!isset($id_usuario)){
                        $this->modelMaterialTraido->insertMaterialTraido($id_material, $peso, $id_usuario);
                    }else{
                        $materialVecino = $this->modelMaterialTraido->getMaterialVecinoBuenaOnda($id_material);
                        if(empty($materialVecino)){
                            $this->modelMaterialTraido->insertMaterialTraido($id_material, $peso, 0);  
                        }else{
                             $this->modelMaterialTraido->updateMaterialTraido($peso + $materialVecino->peso, $id_material);//2 siendo el usuario de vecino buena onda
                        }
                        header("Location: " . BASE_BALANZA);
                    }

              //  }else{
                //$this->view->showError();
            //}
        }
}