<?php


require "objetos/escritor.php";
////require_once "conexion.php";
$leer = new contrasena;

///$locutor= $_GET['nombre'];

////$locuente = $_GET['elocuente'];

////$mensaje = $_GET['mensaje'];

/////$fecha = $_GET['fecha'];
$directoriolocutor = "public/mensajeria/enlinea1.txt";
$emisor =$leer->leer($directoriolocutor);
$resepror = $leer->leer("public/mensajeria/".$emisor."/enlinea2.txt");
////$resepror2 =  $leer->leer("public/mensajeria/".$resepror."/enlinea2.txt");

$fecha = date("Y-m-d H:i:s");
////$locuente ="carlosmontoya17072018@gmail.com"; https://www.giosaboutique.com/nuevoclock/motorHistori/quienenlinea.php

$mensajes = $leer->leer("public/mensajeria/".$emisor."/".$resepror.".txt");
$todosLosMensajes = explode("mensaje".chr(34).":",$mensajes);
$numeroMensajes = count($todosLosMensajes);

$ultimoMensaje = explode(chr(34),$todosLosMensajes[$numeroMensajes-1]);

$formatoJonson = '[{"emisor":"'.$emisor.'","reseptor":"'.$resepror.'","fecha":"'.$ultimoMensaje[1].'"}]';


//////$formatoJonson = '[{"emisor":"'.$emisor.'","reseptor":"'.$resepror.'","fecha":"'.$fecha.'"}]';



echo $formatoJonson;