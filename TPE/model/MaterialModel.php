<?php

    class MaterialModel 
    {

    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=bd_metodologias;charset=utf8', 'root', '');
    }

    function getMateriales(){
        $query = $this->db->prepare("SELECT * FROM materiales");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    function insertMaterial($nombre, $aceptado, $descripcion){
        $query = $this->db->prepare("INSERT INTO materiales(nombre, aceptado, descripcion) VALUES(?,?,?)");
        $query->execute(array($nombre, $aceptado, $descripcion));
    }

    function deleteMaterial($id){
        $query =$this->db->prepare("DELETE FROM materiales WHERE materiales.id_materiales = ?");
        $query->execute(array($id));
    }

    function updateMaterial($id_material, $nombre, $aceptado, $descripcion){
        $sentencia = $this->db->prepare("UPDATE materiales SET nombre=?, aceptado=?, descripcion=? WHERE materiales.id_materiales = ?");
        $sentencia->execute(array($nombre, $aceptado, $descripcion, $id_material)); 
    }

    function getMaterial($id_materiales){
        $sentencia = $this->db->prepare("SELECT * FROM materiales WHERE id_materiales = ?");
        $sentencia->execute(array($id_materiales));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

     








    }