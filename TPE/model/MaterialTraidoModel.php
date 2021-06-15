<?php

    class MaterialTraidoModel 
    {

    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=bd_metodologias;charset=utf8', 'root', '');
    }

    function insertMaterialTraido($id_material, $peso, $id_usuario){
    $query = $this->db->prepare("INSERT INTO material_traido(id_materiales, peso, id_usuario) VALUES(?,?,?)");
    $query->execute(array($id_material, $peso, $id_usuario));
    }

    function updateMaterialTraido($peso, $id_material){
        $query = $this->db->prepare("UPDATE material_traido SET peso=? WHERE id_materiales = ? AND id_usuario = '0'");
        $query->execute(array($peso, $id_material));
    }
    function getMaterialVecinoBuenaOnda($id_material){
        $sentencia = $this->db->prepare("SELECT * FROM material_traido WHERE id_usuario ='0' AND id_materiales = ?");
        $sentencia->execute(array($id_material));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
    function getMaterialesTotales(){
        $sentencia = $this->db->prepare("SELECT m.nombre, SUM(mt.peso) AS 'Peso Total'
                                        FROM material_traido mt
                                        JOIN materiales m ON (m.id_materiales = mt.id_materiales)
                                        GROUP BY mt.id_materiales");
        $sentencia->execute();   
        return $sentencia->fetchAll(PDO::FETCH_OBJ);                        
    }
}
