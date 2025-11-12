<?php
require "objetos/escritor.php";
////require_once "conexion.php";
$leer = new contrasena;




$locutor= $_POST['nombre'];

$elocuente = $_POST['elocuente'];

$mensaje = $_POST['mensaje'];

$mensaje = $locutor." dice ".$mensaje;
$fecha = $_POST['fecha'];


///$locutor = "florcrosaa@gmail.com";
///$elocuente = "carlosmontoya17072018@gmail.com";
///$mensaje = "hola que tal estas que me cuentas ";
////$fecha = "2023-09-06 22:56:56";
/*
$directoriolocutor = "public/mensajeria/enlinea1.txt";
$leer->escribir("",$directoriolocutor);
*/

$directorio = "public/mensajeria/".$locutor;
if(file_exists($directorio)){
    
          
}else{

  mkdir($directorio , 0777);


}
$directorio2 = "public/mensajeria/".$elocuente;
if(file_exists($directorio)){
    
          
}else{

  mkdir($directorio2 , 0777);


}

$directorio = "public/mensajeria/".$locutor."/".$elocuente.".txt";

$enlinea2 = "public/mensajeria/".$elocuente."/enlinea2.txt";
    $leer->escribir_A("",$enlinea2);
    $leer->escribir($locutor,$enlinea2);

    $enlinea3 = "public/mensajeria/".$locutor."/enlinea2.txt";
    $leer->escribir_A("",$enlinea3);
    $leer->escribir($elocuente,$enlinea3);

  $directorio2 = "public/mensajeria/".$elocuente."/".$locutor.".txt";

if(file_exists($directorio)){
    $archivo = $leer->leer($directorio);

    $formatoJonson = '{"nombre":"'.$elocuente.'","mensaje":"'.$mensaje.'","fecha":"'.$fecha.'"}';
    
    $json2 =substr($archivo, 0,strlen($archivo)-1);
    $json2 = $json2 . ",";
    $json2 = $json2 . $formatoJonson;
    $json2 = $json2 . "]";
    
    
    $leer->escribir($json2,$directorio);
            
  }else{
    $formatoJonson = '{"nombre":"'.$elocuente.'","mensaje":"'.$mensaje.'","fecha":"'.$fecha.'"}';
    $json2 = "[";
    $json2 = $json2 . $formatoJonson;
    $json2 = $json2 . "]";

    $leer->escribir_A("",$directorio);
    $leer->escribir($json2,$directorio);




  }

  $directorio2 = "public/mensajeria/".$elocuente."/".$locutor.".txt";

  if(file_exists($directorio2)){
      $archivo = $leer->leer($directorio2);
  
      $formatoJonson = '{"nombre":"'.$elocuente.'","mensaje":"'.$mensaje.'","fecha":"'.$fecha.'"}';
      
      $json2 =substr($archivo, 0,strlen($archivo)-1);
      $json2 = $json2 . ",";
      $json2 = $json2 . $formatoJonson;
      $json2 = $json2 . "]";
      
      
      $leer->escribir($json2,$directorio2);
              
    }else{
      $formatoJonson = '{"nombre":"'.$elocuente.'","mensaje":"'.$mensaje.'","fecha":"'.$fecha.'"}';
      $json2 = "[";
      $json2 = $json2 . $formatoJonson;
      $json2 = $json2 . "]";
  
      $leer->escribir_A("",$directorio2);
      $leer->escribir($json2,$directorio2);
  
      
  
  
    }






