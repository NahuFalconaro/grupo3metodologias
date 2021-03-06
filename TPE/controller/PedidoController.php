<?php

require_once "./model/PedidoModel.php";
require_once  "view/View.php";
class PedidoController
{

    private $pedidoModel;
    private $view;
    private $usuarioModel;
    function __construct()
    {
        $this->view = new View();
        $this->pedidoModel = new PedidoModel();
        $this->usuarioModel = new UserModel();
    }

    //se fija si esta logeado y llama a la view del formulario de contactanos
    function formPedido()
    {
        // $logged = $this->userController->getAccess();
        $this->view->Form();
    }

    //Comprueba y manda al Model el pedido, luego redirecciona al Home
    function agregarPedido()
    {
        $imagen = null;
        if (isset($_FILES)) {

            if ($_FILES['foto']['type'] == "image/jpg" ||  $_FILES['foto']['type'] == "image/jpeg" || $_FILES['foto']['type'] == "image/png") {
                //si la imagen tiene el formato aceptado, guardo 2 cosas en un array para pasarle al model:

                //1) la ubicacion de la imagen cuando recien está subida y está en formato .temp ("fileTemp").

                //2) el lugar donde quiero guardar la imagen. consiste de: la carpeta donde la quiero guardar,
                // un nombre unico (uniqid) y la extension de la imagen. agrupo todo esto en un string.

                $imagen["fileTemp"] = $_FILES['foto']['tmp_name'];
                $imagen["filePath"] = "images/" . uniqid("", true) . "." . strtolower(pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION));
            };
        }
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $ubicacion = $_POST["direccion"];
        $telefono = $_POST["telefono"];
        $claseVehiculo = $_POST["clase_vehiculo"];
        $franjaHoraria = $_POST["franja_horaria"];

        $cartonero_dni = $this->assignCartonero();

        $this->pedidoModel->addPedido($cartonero_dni, $nombre, $apellido, $ubicacion, $telefono, $imagen, $claseVehiculo, $franjaHoraria);
        header("Location: " . BASE_FORM_PEDIDO);
    }


    //Asigna un cartonero aleatoriamente
    function assignCartonero()
    {
        $cartoneros = $this->usuarioModel->getAllCartoneros();

        if (count($cartoneros) != 0) {
            $random = rand(0, count($cartoneros) - 1);
            $cartonero_elegido = $cartoneros[$random];
            return $cartonero_elegido->dni;
        } else return null;
    }

    //traigo de la db los pedidos y muestro solo las direcciones en el front
    function verDirecciones()
    {
        $pedidos = $this->pedidoModel->getAllPedidos();
        $this->view->verDirecciones($pedidos);
    }


    //trae todos los cartoneros y sus pedidos asignados, y arma un array para presentarselo a la view
    function verRecorridos()
    {
        $cartoneros = $this->usuarioModel->getAllCartoneros();

        $i = 0;
        $retorno = [];
        foreach ($cartoneros as $cartonero) {
            $pedidos = $this->pedidoModel->getPedidosByDni($cartonero->dni);

            $armado = [];
            $armado[0] = $cartonero->dni;
            $armado[1] = $cartonero->nombre;
            $armado[2] = $pedidos;
            $retorno[$i] = $armado;
            $i++;
        }

        $this->view->verRecorridos($retorno);
    }
}
