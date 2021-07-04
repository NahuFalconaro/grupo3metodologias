<?php

   
    class MaterialTraidoModel
    {
        protected $db;

        function __construct()
        {
            $this->db = new PDO('mysql:host=localhost;' . 'dbname=bd_metodologias;charset=utf8', 'root', '');
        }
    function insertMaterialTraido($id_material, $peso, $dni){
    $query = $this->db->prepare("INSERT INTO material_traido(id_materiales, peso, dni) VALUES(?,?,?)");
    $query->execute(array($id_material, $peso, $dni));
    }

    function updateMaterialTraido($peso, $id_material,$dni){
        $query = $this->db->prepare("UPDATE material_traido SET peso=? WHERE id_materiales = ? AND dni = ?");
        $query->execute(array($peso, $id_material,$dni));
    }

    function getMaterialVecinoBuenaOnda($id_material){
        $sentencia = $this->db->prepare("SELECT * FROM material_traido WHERE dni = null AND id_materiales = ?");
        $sentencia->execute(array($id_material));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    //trae la cantidad de materiales que trajo cada cartonero ->no incluye el vecino buena onda (dni=null)
    function getMaterialesPorCartoneros(){
        $sentencia = $this->db->prepare("
                        SELECT u.nombre AS 'cartonero', m.nombre AS 'material', SUM(mt.peso) AS 'peso'
                                        FROM material_traido mt
                                        JOIN materiales m ON (mt.id_materiales = m.id_materiales)
                                        LEFT JOIN usuario u ON (mt.dni= u.dni)
                                        WHERE u.dni IS NOT NULL
                                        GROUP BY material,cartonero");
        $sentencia->execute();   
        return $sentencia->fetchAll(PDO::FETCH_OBJ);                        
    }
}
