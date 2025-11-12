<?php
require "objetos/escritor.php";


function bbddusers2(){

$leer = new contrasena;

        $direccionCarpetaBasededatos = "public/img/usuarios";
    $archivos="";

    $archivos = $leer->leerdir($direccionCarpetaBasededatos);
  //  echo sizeof($archivos)." ==";
  ///print_r($archivos);
$iddelarchivo="";

    for($i=3;$i<sizeof( $archivos)+4;$i++){


      $copia[$i]=$archivos[$i];
////echo $archivos[$i]."<br>";




         

     /*  ///////////////////////////////////////////////////
     if(file_exists($direccionCarpetaBasededatos."/".$archivos[$i]."/id.txt")){
      $iddelarchivo =$leer->leer($direccionCarpetaBasededatos."/".$archivos[$i]."/id.txt");
     }

     */  //////////////////////////////////////////////////



    }


$d="public/img/usuarios";
///print_r($copia);
///$copia = $leer->leerdir($d);
$menor=1;
    for($i=0;$i<sizeof($copia);$i++){

          for($ii=3;$ii<sizeof($copia);$ii++){

            if($copia[$ii]>$menor){

                  $menor = $copia[$i];
                  $orden[$i]=$menor;

                

             ///     echo  $menor."<br>";

            }

       ///  echo $copia[$i]."<br>";
          }

      
    }

    

   $empezamos=  (int)$menor."<br>";

   return   array_reverse($orden);




}

function bbddusers(){

$leer = new contrasena;

$d="public/img/usuarios";



$carpeta3 = $leer->leerdir($d);



$carpeta2 = bbddusers2();

$carpeta = $carpeta2;




for($i = 0;$i<sizeof($carpeta)+3;$i++){


$id[$i]=$leer->leer($d."/".$carpeta[$i]."/id.txt");
$titulo[$i]=$leer->leer($d."/".$carpeta[$i]."/titulo.txt");
$texto[$i]=$leer->leer($d."/".$carpeta[$i]."/texto.txt");
$fecha[$i]=$leer->leer($d."/".$carpeta[$i]."/fecha.txt");
$email[$i]=$leer->leer($d."/".$carpeta[$i]."/email.txt");
$img1[$i]=$leer->leer($d."/".$carpeta[$i]."/img1.txt");
$img2[$i]=$leer->leer($d."/".$carpeta[$i]."/img2.txt");
$img3[$i]=$leer->leer($d."/".$carpeta[$i]."/img3.txt");
$img4[$i]=$leer->leer($d."/".$carpeta[$i]."/img4.txt");
$video[$i]=$leer->leer($d."/".$carpeta[$i]."/video.txt");

$InputFile2[$i]=$leer->leer($d."/".$carpeta[$i]."/InputFile2.txt");

  
  ///  echo $id[$i]."<br>";
  ///  echo $titulo[$i]."<br>";
   /// echo $texto[$i]."<br>";
  ///  echo $fecha[$i]."<br>";
   /// echo $email[$i]."<br>";
  ///  echo $img1[$i]."<br>";
  ///  echo $img2[$i]."<br>";
   /// echo $img3[$i]."<br>";
  ///  echo $img4[$i]."<br>";
  ///   echo $video[$i]."<br>";
  ////    echo $InputFile2[$i]."<br>";


/////////////////////////////////////////////////////////////////// confi para voltear

        $json1 = $json1.'{ "id":"'. $id[$i].'",';
        $json1 = $json1.' "titulo":"'. $titulo[$i].'",';
        $json1 = $json1.' "email":"'. $email[$i].'",';
       //// $json1 = $json1.' "fecha":"'. $fecha[$i].'",';
        $json1 = $json1.' "img1":"'. $img1[$i].'",';
        $json1 = $json1.' "img2":"'. $img2[$i].'",';


        $json1 = $json1.' "img3":"'. $img3[$i].'",';

        $json1 = $json1.' "img4":"'. $img4[$i].'",';


        $json1 = $json1.' "video":"'. $video[$i].'",';
        $json1 = $json1.' "InputFile2":"'. $InputFile2[$i].'"},';

                $jsonArray[$i]=$json1;

              ///  echo $json1;

                $json1="";

               
////////////////////////////////////////////////////////////////// confi para voltear InputFile2
   

}

////echo sizeof($carpeta);

return $jsonArray;


 



}

$inicio =bbddusers2();
///print_r($inicio);
//echo $inicio;

$jsonArray=bbddusers();
////$jsonArray=bbddusers2();



 ////////////////////////////////////////////////////////------------confi para voltear

    $json2 = $json2 ."[";
   //// $jonsoReves = array_reverse($jsonArray);

      $jonsoReves = $jsonArray;
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
$query = "SELECT * FROM blogs_supermercados";

$json = $json ."[";
if ($result = $mysqli->query($query)) {

    while ($row = $result->fetch_assoc()) {
        $bbdd["id"][$i] = $row["id"];
        $bbdd["titulo"][$i] = $row["titulo"];
        $bbdd["email"][$i] = $row["email"];
        $bbdd["fecha"][$i] = $row["fecha"];
    
    /////////////////////////////////////////-------------json-----
 ///  if($i>0){//////--------------------------------------------------0 por que de esta forma empesara en el usuario 1
    $json = $json.'{ "id":"'. $row["id"].'",';
        $json = $json.' "titulo":"'. $row["titulo"].'",';
            $json = $json.' "email":"'. $row["email"].'",';
                $json = $json.' "fecha":"'. $row["fecha"].'",';
                $json = $json.' "img1":"'. $row["img1"].'",';
                $json = $json.' "img2":"'. $row["img2"].'",';


                $json = $json.' "video":"'. $row["video"].'"},';

/////////////////////////////////////////////////////////////////// confi para voltear
        $json1 = $json1.'{ "id":"'. $row["id"].'",';
        $json1 = $json1.' "titulo":"'. $row["titulo"].'",';
        $json1 = $json1.' "email":"'. $row["email"].'",';
        $json1 = $json1.' "fecha":"'. $row["fecha"].'",';
        $json1 = $json1.' "img1":"'. $row["img1"].'",';
        $json1 = $json1.' "img2":"'. $row["img2"].'",';


        $json1 = $json1.' "img3":"'. $row["img3"].'",';

        $json1 = $json1.' "img4":"'. $row["img4"].'",';


        $json1 = $json1.' "video":"'. $row["video"].'",';
        $json1 = $json1.' "InputFile2":"'. $row["InputFile2"].'"},';

                $jsonArray[$i]=$json1;
                $json1="";

////////////////////////////////////////////////////////////////// confi para voltear InputFile2

  ///  }
        $i++;
 }

    $json =substr($json, 0,strlen($json)-1);
    $json = $json . "]";


    ////////////////////////////////////////////////////////------------confi para voltear

    $json2 = $json2 ."[";
    $jonsoReves = array_reverse($jsonArray);
    for($i=3;$i<sizeof($jonsoReves)+1;$i++){

        $json2 = $json2.$jonsoReves[$i];

    }
  /////  $json2 = $json2 . "]";
    $json2 =substr($json2, 0,strlen($json2)-1);
    $json2 = $json2 . "]";
    //////////////////////////////////////////////////////--------------confi para voltear


////$result->free();

///////////////echo print_r($jsonArray);
echo $json2;
}


*/


