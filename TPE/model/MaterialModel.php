<?php

    class MaterialModel 
    {

    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=bd_metodologias;charset=utf8', 'root', '');
    }
    //Funcion que trae todos los materiales de la base de datos
    function getMateriales(){
        $query = $this->db->prepare("SELECT * FROM materiales");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    //Funcion que inserta un material a la base de datos
    function insertMaterial($nombre, $aceptado, $descripcion){
        $query = $this->db->prepare("INSERT INTO materiales(nombre, aceptado, descripcion) VALUES(?,?,?)");
        $query->execute(array($nombre, $aceptado, $descripcion));
    }
    //Funcion que elimina un material de la base de datos
    function deleteMaterial($id){
        $query =$this->db->prepare("DELETE FROM materiales WHERE materiales.id_materiales = ?");
        $query->execute(array($id));
    }
    //Funcion que modifica un material de la base de datos
    function updateMaterial($id_material, $nombre, $aceptado, $descripcion){
        $sentencia = $this->db->prepare("UPDATE materiales SET nombre=?, aceptado=?, descripcion=? WHERE id_materiales = ?");
        $sentencia->execute(array($nombre, $aceptado, $descripcion, $id_material)); 
    }
    //Funcion que obtiene un material especifico por ID de la base de datos
    function getMaterial($id_material){
        $sentencia = $this->db->prepare("SELECT * FROM materiales WHERE id_materiales = ?");
        $sentencia->execute(array($id_material));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }

    //Funcion que obtiene los materiales aceptados
    function getMaterialesAceptados(){
        $sentencia = $this->db->prepare("SELECT * FROM materiales WHERE aceptado=1");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
     








    }