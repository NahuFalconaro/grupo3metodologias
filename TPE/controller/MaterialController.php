<?php

    require_once  "model/MaterialModel.php";
    require_once  "UserController.php";
    require_once  "view/View.php";
    class MaterialController{

        protected $model;
        protected $view;
        private $modelMaterial;
        private $userController;

        function __construct(){
            $this->view = new View();
            $this->modelMaterial = new MaterialModel();
            $this->userController = new UserController();  
        }
        //Funcion la cual obtiene los materiales de la base de datos, consulta por el estado de acceso del usuario
        //y lo pasa para que lo renderice la vista
        function showMateriales($params = null){
            $materiales = $this->modelMaterial->getMateriales(); 
            $this->view->ShowCarteleraPublica($materiales);          
        }
        function showMaterialesAdmin($params = null){
            $materiales = $this->modelMaterial->getMateriales(); 
            $logged = $this->userController->getAccess();   
            $this->view->ShowCarteleraAdmin($materiales);
        }
        //Funcion que inserta un material nuevo a la base de datos, obteniendo los datos desde formulario de la vista
        function insertMaterial(){
            $logged = $this->userController->getAccess(); 
            $nombre = $_POST['nombre'];
            $aceptado = $_POST['aceptado'];
            $descripcion = $_POST['descripcion'];
            if(!empty($nombre)){// la descripcion no es necesaria si el material no es aceptado
                $this->modelMaterial->insertMaterial($nombre, $aceptado, $descripcion);
                $materiales = $this->modelMaterial->getMateriales();
                $this->view->ShowAdminMateriales(); // arreglar porque tira error
            }else{
                $this->view->showError();
            }
        }
        //Funcion que eliminaun material de la base de datos
        function deleteMaterial($params = null){
            $id = $params[':ID'];
            $this->modelMaterial->deleteMaterial($id);
            $this->view->ShowAdminMateriales();
        }
        //Funcion que modifica un material de la base de datos
        function updateMaterial($params = null){
            $this->userController->verifyUser();
            $id_material = $params[':ID'];
            $nombre = $_POST['nombreUpdate'];
            $aceptado = $_POST['aceptadoUpdate'];
            $descripcion = $_POST['descripcionUpdate'];
                if(isset($nombre) && isset($aceptado)){
                    $this->modelMaterial->updateMaterial($id_material, $nombre, $aceptado, $descripcion); 
                    $this->view->ShowAdminMateriales();
                }
            }
            //funcion que trae el material para editar y lo muestra en el view
        function getEditMaterial($params = null){
            $id_materiales = $params[':ID'];
            $Material = $this->modelMaterial->getMaterial($id_materiales);
            $this->view->showUpdateMaterial($Material);
        }

    //se fija si esta logeado y llama a la view del home
    function home()
    {
        $logged = $this->userController->getAccess();
        $this->view->ShowHome();
    }

    }