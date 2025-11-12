<?php
require "objetos/escritor.php";
///require_once "conexion.php";
$leer = new contrasena;



$imagen= $_POST['foto'];




$nombre = $_POST['nombre'];
if($nombre ==""){

    $nombre = "jonaten";
}

$mail = $_POST['mail'];
$hash = $_POST['hash'];
$token="token";




    $direccionCarpetaBasededatos = "public/users/kinadmins_supermercado";

    $archivos = $leer->leerdir($direccionCarpetaBasededatos);

    $cantidaddearchivos = sizeof($archivos)-3;

    echo  $cantidaddearchivos+1;

    $numerodearchivos=$cantidaddearchivos+1;

        $directorio = $direccionCarpetaBasededatos."/".$numerodearchivos+1;
    if(file_exists($directorio)){
        
              
    }else{

      mkdir($directorio , 0777);

    }


    /*
    company.txt
country.txt
email.txt
hash.txt
id.txt
name.txt
roll.txt
salt.txt
Surname.txt
token.txt
updated_at.txt

    */

    $today = date("Y-m-d H:i:s"); 

     $leer->escribir_A("company",$directorio."/company.txt");
     $leer->escribir_A("country",$directorio."/country.txt");
     $leer->escribir_A($mail,$directorio."/email.tx");
     $leer->escribir_A($hash,$directorio."/hash.txt");
     $leer->escribir_A($numerodearchivos+1,$directorio."/id.txt");
     $leer->escribir_A($nombre,$directorio."/name.txt");
     $leer->escribir_A("roll",$directorio."/roll.txt");
     $leer->escribir_A("salt",$directorio."/salt.txt");
     $leer->escribir_A("Surname",$directorio."/Surname.txt");
     $leer->escribir_A("token",$directorio."/token.txt");
     $leer->escribir_A($today,$directorio."/updated_at.txt");


      $directorio = "public/userImg";
    if(file_exists($directorio)){
        
              
    }else{

      mkdir($directorio , 0777);

    }



     $path = $directorio."/".$mail.".png";

   
  

    file_put_contents($path, base64_decode($imagen));