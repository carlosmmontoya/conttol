<?php
require "objetos/escritor.php";
////require_once "conexion.php";
$leer = new contrasena;

///$locutor= $_GET['nombre'];

////$locuente = $_GET['elocuente'];

////$mensaje = $_GET['mensaje'];

/////$fecha = $_GET['fecha'];
$directoriolocutor = "public/mensajeria/enlinea1.txt";
$locutor =$leer->leer($directoriolocutor);
////$locuente ="carlosmontoya17072018@gmail.com";

$mensaje = "hola amor como estas ya te levantastes o te quedaste dormida amo";


$directorio = "public/mensajeria/";
if(file_exists($directorio)){
    
          
}else{

  mkdir($directorio , 0777);

}

$directorio = "public/mensajeria/".$locutor;
if(file_exists($directorio)){
    
          
}else{

  mkdir($directorio , 0777);


}
$directoriocomunica= $directorio."/enlinea.txt";


if(file_exists($directoriocomunica)){
    
          $locuente = $leer->leer($directoriocomunica);

          $superdirectoriocomunica = "public/mensajeria/".$locuente;

}else{




}



////$archivolocuente = $directorio."/".$locuente.".txt";
$archivolocuente = $superdirectoriocomunica."/".$locutor.".txt";



if(file_exists($archivolocuente)){

  $contenidolocuente = $leer->leer($archivolocuente);
          
}else{



}

echo $contenidolocuente;