<?php

   
class PedidoModel
{

    protected $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=bd_metodologias;charset=utf8', 'root', '');
    }
    //Comprueba y agrega a la DB el pedido
    function addPedido($nombre, $apellido, $ubicacion, $telefono, $imagen, $claseVehiculo, $franjaHoraria)
    {

        //si está seteada, quiere decir que hay una imagen en la carpeta temporal de php.
        if (isset($imagen["fileTemp"])) {
            move_uploaded_file($imagen["fileTemp"], $imagen["filePath"]);
            $imagen = $imagen["filePath"];
        } else {
            $imagen = null;
        }

        $sentencia = $this->db->prepare("INSERT INTO pedido(nombre, apellido, ubicacion, telefono, foto, clase_vehiculo ,franja_horaria) VALUES(?,?,?,?,?,?,?)");
        $sentencia->execute(array($nombre, $apellido, $ubicacion, $telefono, $imagen, $claseVehiculo, $franjaHoraria));
    }


    //pido todos los pedidos de la db
    function getAllPedidos(){
        $query = $this->db->prepare("SELECT * FROM pedido");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function getPedidosByDni($dni){
        $query = $this->db->prepare("SELECT * FROM pedido WHERE usuario_asignado=?");
        $query->execute(array($dni));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}
