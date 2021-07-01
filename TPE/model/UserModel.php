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

    function updateUser($key, $dni, $nombre, $rol)
    {
        $query = $this->db->prepare("UPDATE usuario SET dni=?, nombre=?, rol=? WHERE dni = ?");
        $query->execute(array($dni, $nombre, $rol, $key));
        return 1;
    }

    function getAllUsers()
    {
        $query = $this->db->prepare("SELECT * FROM usuario");
        $query->execute(array());
        return $query->fetch(PDO::FETCH_OBJ);
    }

    function addUser($dni, $nombre, $rol)
    {
        $sentencia = $this->db->prepare("INSERT INTO usuario(dni, nombre, pass, rol) VALUES(?,?,?,?)");
        $sentencia->execute(array($dni, $nombre, null, $rol));
    }

    function deleteUser($dni)
    {
        $sentencia = $this->db->prepare(" DELETE FROM usuario WHERE dni=?");
        $sentencia->execute(array($dni));
    }
}
