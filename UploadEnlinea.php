<?php
require "objetos/escritor.php";
////require_once "conexion.php";
$leer = new contrasena;


///$locutor = "florcrosaa@gmail.com";
$locutor= $_POST['nombre'];
$locuente= $_POST['elocuente'];

$directoriolocutor = "public/mensajeria/enlinea1.txt";
$directorio = "public/mensajeria/".$locutor;
if(file_exists($directoriolocutor)){
        
              
}else{

  $leer->escribir_A("",$directoriolocutor);
  $leer->escribir($locutor,$directoriolocutor);


}

$directoriocomunica= $directorio."/enlinea.txt";

    
        ///  $locuente = $leer->leer($directoriocomunica);

        $leer->escribir_A("",$directoriolocutor);
        $leer->escribir($locutor,$directoriolocutor);

          $leer->escribir_A("",$directoriocomunica);
          $leer->escribir($locuente,$directoriocomunica);

