<?php
class PedidoModel
{

    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=bd_metodologias;charset=utf8', 'root', '');
    }

    //Formlario Nombre, Apeliido, ubicacion id, foto, clase vehiculo, telefono
    function addPedido($nombre, $apellido, $ubicacion, $telefono, $claseVehiculo, $franjaHoraria)
    {

        //si está seteada, quiere decir que hay una imagen en la carpeta temporal de php.
        //si no lo está, entonces estoy colocando una foto por default y no me importa el "fileTemp", solo el "filePath".
        // if (isset($imagen["fileTemp"])) {
        //     move_uploaded_file($imagen["fileTemp"], $imagen["filePath"]);
        // }

        $sentencia = $this->db->prepare("INSERT INTO pedido(nombre, apellido, ubicacion, telefono, clase_vehiculo ,franja_horaria) VALUES(?,?,?,?,?,?)");
        $sentencia->execute(array($nombre, $apellido, $ubicacion, $telefono, $claseVehiculo, $franjaHoraria));
    }
}
