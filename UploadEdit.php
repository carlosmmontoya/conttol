<?php
require "objetos/escritor.php";
////require_once "conexion.php";
$leer = new contrasena;


///$locutor = "florcrosaa@gmail.com";
$nombre= $_POST['nombre'];
$pass= $_POST['pass'];

$dirnombre = "public/edicion/dirnombre.txt";
$dirpass =   "public/edicion/pass.txt";


    
        ///  $locuente = $leer->leer($directoriocomunica);

        $leer->escribir_A("",$dirnombre);
        $leer->escribir($nombre,$dirnombre);

          $leer->escribir_A("",$dirpass);
          $leer->escribir($pass,$dirpass);