<?php
require "objetos/escritor.php";
$leer = new contrasena;

$archivo = $leer->leer("objetos/pedidos/pedido.php");
$todoslospedidos = explode("Siguiente",$archivo);

$numerodepedidos = sizeof($todoslospedidos);
for($i=0;$i < sizeof($todoslospedidos)-1;$i++){

    $jonson = $jonson.'{"pedido":"'.$todoslospedidos[$i].'"},';

}

$jonson =substr($jonson, 0,strlen($jonson)-1);

echo "[".$jonson."]";