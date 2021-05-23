<?php

class UserModel{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=bd_metodologias;charset=utf8', 'root', '');
    }
    function getUser($id){
        $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE id = ?");
        $sentencia->execute(array($id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
    function getPassword($user){
        $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE usuario = ?");
        $sentencia->execute(array($user));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
}
    

?>