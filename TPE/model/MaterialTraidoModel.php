<?php

    class MaterialTraidoModel 
    {

    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=bd_metodologias;charset=utf8', 'root', '');
    }

    function insertMaterialTraido($id_material, $peso, $id_usuario){
    $query = $this->db->prepare("INSERT INTO material_traido(id_material, peso, id_usuario) VALUES(?,?,?)");
    $query->execute(array($id_material, $peso, $id_usuario));
    }//falta hacer la vista/formulario

    function getPesoVecinoBuenaOnda(){
        $sentencia = $this->db->prepare("SELECT m.peso FROM material_traido m JOIN usuario u ON (m.id_usuario = u.id_usuario) WHERE u.admin = '2'");
        $sentencia->execute();
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    function getMaterialesTotales(){
        $sentencia = $this->db->prepare("SELECT mt.nombre, SUM(mt.peso) AS 'Peso Total'
                                        FROM material_traido
                                        JOIN materiales m ON (m.id_materiales = mt.id_material)
                                        GROUP BY mt.nombre");
        $sentencia->execute();   
        return $sentencia->fetchAll(PDO::FETCH_OBJ);                        
    }




}