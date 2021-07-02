<?php
    require_once  "model/MaterialTraidoModel.php";
    require_once  "model/MaterialModel.php";
    require_once  "UserController.php";
    require_once  "view/View.php";
    class MaterialTraidoController
    {
        private $modelMaterialTraido;
        private $modelMaterial;
        private $userController;
        protected $model;
        protected $view;
        function __construct(){
            $this->view = new View();
            $this->modelMaterialTraido = new MaterialTraidoModel();
            $this->modelMaterial = new MaterialModel();
            $this->userController = new UserController();
        }

        function getBalanza(){
            $Materiales = $this->modelMaterial->getMaterialesAceptados();
            $this->view->showBalanza($Materiales);
        }

        function insertMaterialTraido(){//Inserta el material traido por vecinos o cartoneros
            $logged = $this->userController->getAccess(); 
            $id_material = $_POST['id_materialTraido'];
            $peso = $_POST['pesoTraido'];
            $dni = $_POST['dni'];
            $material = $this->modelMaterial->getMaterial($id_material);
                    if(!empty($dni)){ //si dni es vacio == vecino buena onda -> dni = null
                        $this->modelMaterialTraido->insertMaterialTraido($id_material, $peso, $dni);
                    }else{
                        $materialVecino = $this->modelMaterialTraido->getMaterialVecinoBuenaOnda($id_material);
                        if(empty($materialVecino)){
                            $this->modelMaterialTraido->insertMaterialTraido($id_material, $peso, null);  
                        }else{
                             $this->modelMaterialTraido->updateMaterialTraido($peso + $materialVecino->peso, $id_material);//null siendo el usuario de vecino buena onda
                        }
                        header("Location: " . BASE_BALANZA);
                    }
                    header("Location: " . BASE_BALANZA);
        }

        function listarMaterialesPorCartoneros(){
            $Materiales = $this->modelMaterialTraido->getMaterialesPorCartoneros();
            $this->view->listarMaterialesPorCartoneros($Materiales);
        }
}