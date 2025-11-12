<?php
require "objetos/escritor.php";
require_once "conexion.php";
$leer = new contrasena;



$name= $_POST['name'];
$Suname= $_POST['Suname'];
$email= $_POST['email'];
$hash= $_POST['pass'];
$roll= $_POST['roll'];
$token= $_POST['token'];
$id= $_POST['UserId'];

///$name="name";
///$email="carlosmontoya170718@gmail.com";
///$hash="ufqqy83779@";
///$token="carlosmontoya170718@gmail.com,florcrosaa@gmail.com,taniamota@gmail.com,erick@gmail.com";
///$id="6";

$datos["name"]= $name;
$datos["Surname"]= "Surname";
$datos["company"]= "company";
$datos["country"]= "country";
$datos["email"]= $email;
$datos["hash"]= $hash;
$datos["roll"]= $roll;
$datos["salt"]= "salt";
$datos["token"]= $token;
$datos["id"]=$id;

/////$stmt = Conexion::conectar()->prepare("INSERT INTO kinadmins(name, Surname, company, country, email, hash, roll, salt, token ) VALUES (:name, :Surname, :company, :country, :email, :hash, :roll, :salt, :token)");
    $stmt = Conexion::conectar()->prepare("UPDATE kinadmins SET name = :name, Surname = :Surname,company = :company,country = :country, email = :email,hash = :hash,roll= :roll,salt=:salt,  token = :token  WHERE id = :id");
   /// $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre=:nombre, email=:email, password=:password WHERE id = :id");




    $stmt->bindParam(":name", $datos["name"], PDO::PARAM_STR);
    $stmt->bindParam(":Surname", $datos["Surname"], PDO::PARAM_STR);
    $stmt->bindParam(":company", $datos["company"], PDO::PARAM_STR);
    $stmt->bindParam(":country", $datos["country"], PDO::PARAM_STR);
    $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
    $stmt->bindParam(":hash", $datos["hash"], PDO::PARAM_STR);
    $stmt->bindParam(":roll", $datos["roll"], PDO::PARAM_STR);
    $stmt->bindParam(":salt", $datos["salt"], PDO::PARAM_STR);
    $stmt->bindParam(":token", $datos["token"], PDO::PARAM_STR);

    $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

    $stmt->execute();
    
        // RUTA DONDE SE GUARDARAN LAS IMAGENES
       

    