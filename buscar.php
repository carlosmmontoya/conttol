<?php
require "objetos/escritor.php";
require_once "conexion.php";
$leer = new contrasena;




$sql = "SELECT * FROM blogs WHERE titulo = :titulo";
$stmt = Conexion::conectar()->prepare($sql);
$resultados="";
$titulo = "Lenovo ";
$palabrasTitulo = explode(" ",$titulo);
// Enlaza el placeholder :nombre con el valor real


  $stmt->bindParam(':titulo', $palabrasTitulo[0], PDO::PARAM_STR);

// Ejecuta la consulta
  $stmt->execute();

$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

//$stmt->bindParam(':titulo', $titulo, PDO::PARAM_STR);
foreach ($resultados as $fila) {
    echo $fila['titulo'] . ' - ' . $fila['email'] . '<br>';
}
