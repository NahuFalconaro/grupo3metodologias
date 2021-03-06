<?php


class UserModel
{
    protected $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=bd_metodologias;charset=utf8', 'root', '');
    }
    //retorna el user (si existe) a partir de un id como parametro
    function getUser($dni)
    {
        $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE dni = ?");
        $sentencia->execute(array($dni));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    //actualiza la info de un usuario
    function updateUser($key, $dni, $nombre, $apellido,  $telefono, $email, $direccion, $fecha_nacimiento, $clase_vehiculo, $rol)
    {
        $query = $this->db->prepare("UPDATE usuario SET dni=?, nombre=?, apellido=?, telefono=?, email=?, direccion=?, fecha_nacimiento=?, clase_vehiculo=?, rol=? WHERE dni = ?");
        $query->execute(array($dni, $nombre, $apellido,  $telefono, $email, $direccion, $fecha_nacimiento, $clase_vehiculo, $rol, $key));
    }

    //Trae TODOS los usuarios
    function getAllUsers()
    {
        $query = $this->db->prepare("SELECT * FROM usuario");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    //Añadir un usuario
    function addUser($dni, $nombre, $apellido, $telefono, $email, $direccion, $fecha_nacimiento, $clase_vehiculo, $rol)
    {
        $sentencia = $this->db->prepare("INSERT INTO usuario(dni, nombre, apellido, telefono, email, direccion, fecha_nacimiento, clase_vehiculo, pass, rol) VALUES(?,?,?,?,?,?,?,?,?,?)");
        $sentencia->execute(array($dni, $nombre,$apellido, $telefono, $email, $direccion, $fecha_nacimiento, $clase_vehiculo, null, $rol));
    }

    //Borra un usuario en base a su dni
    function deleteUser($dni)
    {
        $query = $this->db->prepare("DELETE FROM usuario WHERE dni = ?");
        $query->execute(array($dni));
    }

    //Trae todos los cartoneros
    function getAllCartoneros(){
        $query = $this->db->prepare("SELECT * FROM usuario WHERE rol=?");
        $query->execute(array($i = "cartonero"));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}
