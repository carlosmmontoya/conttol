<?php
require "objetos/escritor.php";
require_once "conexion.php";
$leer = new contrasena;


$id= $_POST['id'];

///$id= "350";


$datos["id"]=$id;


$stmt = Conexion::conectar()->prepare("DELETE FROM blogs_supermercados WHERE id = :id");
$stmt -> bindParam(":id", $datos["id"], PDO::PARAM_INT);


$stmt->execute();


