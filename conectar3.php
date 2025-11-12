<?php


require "objetos/escritor.php";
function bbddusers(){

$leer = new contrasena;

$d="public/users/kinadmins_supermercado";

$carpeta = $leer->leerdir($d);



for($i = 3;$i<sizeof($carpeta)+1;$i++){


$id[$i]=$leer->leer($d."/".$carpeta[$i]."/id.txt");
$name[$i]=$leer->leer($d."/".$carpeta[$i]."/name.txt");
$Surname[$i]=$leer->leer($d."/".$carpeta[$i]."/Surname.txt");
$company[$i]=$leer->leer($d."/".$carpeta[$i]."/company.txt");
$country[$i]=$leer->leer($d."/".$carpeta[$i]."/country.txt");
$email[$i]=$leer->leer($d."/".$carpeta[$i]."/email.txt");
$hash[$i]=$leer->leer($d."/".$carpeta[$i]."/hash.txt");
$roll[$i]=$leer->leer($d."/".$carpeta[$i]."/roll.txt");
$salt[$i]=$leer->leer($d."/".$carpeta[$i]."/salt.txt");
$token[$i]=$leer->leer($d."/".$carpeta[$i]."/token.txt");
$updated_at[$i]=$leer->leer($d."/".$carpeta[$i]."/updated_at.txt");



  /*
    echo $id[$i]."<br>";
    echo $name[$i]."<br>";
    echo $Surname[$i]."<br>";
    echo $company[$i]."<br>";
    echo $country[$i]."<br>";
    echo $email[$i]."<br>";
    echo $hash[$i]."<br>";
    echo $roll[$i]."<br>";
    echo $salt[$i]."<br>";
 
    echo $token[$i]."<br>";
    echo $updated_at[$i]."<br>";
    */


/////////////////////////////////////////////////////////////////// confi para voltear

       $json1 = $json1.'{ "id":"'. $id[$i].'",';
        $json1 = $json1.' "name":"'. $name[$i].'",';
        $json1 = $json1.' "Surname":"'. $Surname[$i].'",';
        $json1 = $json1.' "email":"'. $email[$i].'",';
        $json1 = $json1.' "hash":"'.$hash[$i].'",';
        $json1 = $json1.' "roll":"'. $roll[$i].'",';
        $json1 = $json1.' "salt":"'. $salt[$i].'",';
        $json1 = $json1.' "token":"'. $token[$i].'",';
        $json1 = $json1.' "updated_at":"'. $updated_at[$i].'"},';
                $jsonArray[$i]=$json1;
                $json1="";

               
////////////////////////////////////////////////////////////////// confi para voltear InputFile2
   

}

////echo sizeof($carpeta);

return $jsonArray;


 



}

////bbddusers();
$jsonArray=bbddusers();

 ////////////////////////////////////////////////////////------------confi para voltear

 $json2 = $json2 ."[";
    $jonsoReves = array_reverse($jsonArray);
    for($i=0;$i<sizeof($jonsoReves)+1;$i++){

        $json2 = $json2.$jonsoReves[$i];

    }
  /////  $json2 = $json2 . "]";
    $json2 =substr($json2, 0,strlen($json2)-1);
    $json2 = $json2 . "]";
    //////////////////////////////////////////////////////--------------confi para voltear

    echo $json2;


 /*
$username = "Sql1644130";
$password = "Carlos227567@@";
$database = "Sql1644130_1";
$mysqli = new mysqli("89.46.111.248", $username, $password, $database);


$i=0;
$query = "SELECT * FROM kinadmins_supermercado";

$json = $json ."[";
if ($result = $mysqli->query($query)) {

    while ($row = $result->fetch_assoc()) {
   
  

        $bbdd["id"][$i] = $row["id"];
        $bbdd["titulo"][$i] = $row["titulo"];
        $bbdd["email"][$i] = $row["email"];
        $bbdd["fecha"][$i] = $row["fecha"];

        
        */
    
    /////////////////////////////////////////-------------json-----
 ///  if($i>0){//////--------------------------------------------------0 por que de esta forma empesara en el usuario 1
 /*
   $json = $json.'{ "id":"'. $row["id"].'",';
        $json = $json.' "titulo":"'. $row["titulo"].'",';
            $json = $json.' "email":"'. $row["email"].'",';
                $json = $json.' "fecha":"'. $row["fecha"].'",';
                $json = $json.' "img1":"'. $row["img1"].'",';
                $json = $json.' "img2":"'. $row["img2"].'",';
                $json = $json.' "video":"'. $row["video"].'"},';
              salt
                

/////////////////////////////////////////////////////////////////// confi para voltear
        $json1 = $json1.'{ "id":"'. $row["id"].'",';
        $json1 = $json1.' "name":"'. $row["name"].'",';
        $json1 = $json1.' "Surname":"'. $row["Surname"].'",';
        $json1 = $json1.' "email":"'. $row["email"].'",';
        $json1 = $json1.' "hash":"'. $row["hash"].'",';
        $json1 = $json1.' "roll":"'. $row["roll"].'",';
        $json1 = $json1.' "salt":"'. $row["salt"].'",';
        $json1 = $json1.' "token":"'. $row["token"].'",';
        $json1 = $json1.' "updated_at":"'. $row["updated_at"].'"},';
                $jsonArray[$i]=$json1;
                $json1="";

///////////////////////////////////////////updated_at/////////////////////// confi para voltear

  ///  }
        $i++;
 }
        
 */
/*
    $json =substr($json, 0,strlen($json)-1);
    $json = $json . "]";

    ////////////////////////////////////////////////////////------------confi para voltear
    $json2 = $json2 ."[";
    $jonsoReves = array_reverse($jsonArray);
    for($i=0;$i<sizeof($jonsoReves)+1;$i++){

        $json2 = $json2.$jonsoReves[$i];

    }
  /////  $json2 = $json2 . "]";
    $json2 =substr($json2, 0,strlen($json2)-1);
    $json2 = $json2 . "]";
    //////////////////////////////////////////////////////--------------confi para voltear


$result->free();

///////////////echo print_r($jsonArray);
echo $json2;
}*/