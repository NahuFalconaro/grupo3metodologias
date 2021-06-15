<?php
    require_once 'Model.php';
   
class UserModel  extends Model{

    //retorna el user (si existe) a partir de un id como parametro
    function getUser($id){
        $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE id = ?");
        $sentencia->execute(array($id));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    //retorna el user (si existe) a partir de un nombre como parametro
    function getPassword($user){
        $sentencia = $this->db->prepare("SELECT * FROM usuario WHERE usuario = ?");
        $sentencia->execute(array($user));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
}
    

?>