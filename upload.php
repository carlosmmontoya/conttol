<?php
require "objetos/escritor.php";
////require_once "conexion.php";
$leer = new contrasena;



///if($_SERVER['REQUEST_METHOD']=='POST'){
$imagen="";
 
    $imagen= $_POST['foto'];
    $imagen1= $_POST['foto1'];
    $imagen2= $_POST['foto2'];
    $imagen3= $_POST['foto3'];



    $nombre = $_POST['nombre'];
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $texto = $_POST['texto'];
    $email = $_POST['email'];
    $fecha = $_POST['fecha'];

    $img1  ="img/usuarios/".$id."/1.png";;
    $img2  ="img/usuarios/".$id."/2.png";
    $img3  ="img/usuarios/".$id."/2.png";
    $img4  ="img/usuarios/".$id."/2.png";

    $video = $_POST['video'];
    $exampleInputFile = $_POST['exampleInputFile'];
    $InputFile2 = $_POST['InputFile2'];
    $bInputFile3 = $_POST['bInputFile3'];
    $dInputFile4 = $_POST['dInputFile4'];
    $fInputFile5 = $_POST['fInputFile5'];
    $updated_at = $_POST['updated_at'];
/*

    $datos["titulo"]= $titulo;
    $datos["texto"]=$texto;
    $datos["email"]=$email;
    $datos["img1"]=$_POST['img1'];
    $datos["img2"]="img/usuarios/".$id."/2.png";
    $datos["img3"]="img/usuarios/".$id."/3.png";
    $datos["img4"]="img/usuarios/".$id."/4.png";
    $datos["video"]=$_POST['video'];
    $datos["exampleInputFile"]="img/exampleInputFile";
    $datos["InputFile2"]=$InputFile2;
    $datos["bInputFile3"]=$bInputFile3;
    $datos["dInputFile4"]=$dInputFile4;
    $datos["fInputFile5"]=$fInputFile5;
    
    
    #statement: declaración
    
    #prepare() Prepara una sentencia SQL para ser ejecutada por el método PDOStatement::execute(). La sentencia SQL puede contener cero o más marcadores de parámetros con nombre (:name) o signos de interrogación (?) por los cuales los valores reales serán sustituidos cuando la sentencia sea ejecutada. Ayuda a prevenir inyecciones SQL eliminando la necesidad de entrecomillar manualmente los parámetros.
    
    $stmt = Conexion::conectar()->prepare("INSERT INTO blogs_supermercados(titulo,texto,email,img1,img2,img3,img4,video,exampleInputFile,InputFile2,bInputFile3,dInputFile4,fInputFile5) VALUES ( :titulo,:texto, :email,:img1,:img2,:img3,:img4,:video,:exampleInputFile,:InputFile2,:bInputFile3,:dInputFile4,:fInputFile5)");
    
    #bindParam() Vincula una variable de PHP a un parámetro de sustitución con nombre o de signo de interrogación correspondiente de la sentencia SQL que fue usada para preparar la sentencia.
    
   
    
    
    $stmt->bindParam(":titulo", $datos["titulo"], PDO::PARAM_STR);
    $stmt->bindParam(":texto", $datos["texto"], PDO::PARAM_STR);
    $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
    $stmt->bindParam(":img1", $datos["img1"], PDO::PARAM_STR);
    $stmt->bindParam(":img2", $datos["img2"], PDO::PARAM_STR);
    $stmt->bindParam(":img3", $datos["img3"], PDO::PARAM_STR);
    $stmt->bindParam(":img4", $datos["img4"], PDO::PARAM_STR);
    $stmt->bindParam(":video", $datos["video"], PDO::PARAM_STR);
    $stmt->bindParam(":exampleInputFile", $datos["exampleInputFile"], PDO::PARAM_STR);
    $stmt->bindParam(":InputFile2", $datos["InputFile2"], PDO::PARAM_STR);
    $stmt->bindParam(":bInputFile3", $datos["bInputFile3"], PDO::PARAM_STR);
    $stmt->bindParam(":dInputFile4", $datos["dInputFile4"], PDO::PARAM_STR);
    $stmt->bindParam(":fInputFile5", $datos["fInputFile5"], PDO::PARAM_STR);
    $stmt->execute();

    */
    ///print_r($stmt->execute());
  ////  $result = $stmt->fetch(PDO::FETCH_ASSOC);

   //// $ultimo_id = $result["id"];
    //// $ultimo_id = Conexion::conectar()->lastInsertId();
    /// $dbh->lastInsertId();
  ///  $statement = Conexion::conectar()->prepare("SELECT LAST_INSERT_ID() AS id" );
  ////  $statement->execute();       
   //// $result1 = $statement->fetch(PDO::FETCH_ASSOC);
    
   
   /// $ultimo_id = mysql_insert_id(Conexion::conectar()); 
   //// echo $ultimo_id; 
    
    
    
    
    

    $direccionCarpetaBasededatos = "public/img/usuarios";
    $archivos="";

    $archivos = $leer->leerdir($direccionCarpetaBasededatos);
    echo sizeof($archivos)." ==";
$iddelarchivo="";

    for($i=3;$i<sizeof( $archivos)+4;$i++){


      $copia[$i]=$archivos[$i];
///echo $archivos[$i]."<br>";




         

     /*  ///////////////////////////////////////////////////
     if(file_exists($direccionCarpetaBasededatos."/".$archivos[$i]."/id.txt")){
      $iddelarchivo =$leer->leer($direccionCarpetaBasededatos."/".$archivos[$i]."/id.txt");
     }

     */  //////////////////////////////////////////////////



    }
$menor=1;
    for($i=3;$i<sizeof($copia);$i++){

          for($ii=3;$ii<sizeof($copia);$ii++){

            if($copia[$ii]>$menor){

                  $menor = $copia[$i];

                

                  echo  $menor."<br>";

            }

      ////   echo $copia[$i]."<br>";
          }

      
    }

    

   echo  $menor."<br>";


   
    $ide=$menor+1;

 echo "esto es ide". $ide;
   /// $numerodearchivos=$cantidaddearchivos+1;

     ///   $directorio = $direccionCarpetaBasededatos."/".$numerodearchivos+1;


    // RUTA DONDE SE GUARDARAN LAS IMAGENES
    ////$directorio = $id;

        $img1  ="img/usuarios/".$ide."/1.png";;
    $img2  ="img/usuarios/".$ide."/2.png";
    $img3  ="img/usuarios/".$ide."/2.png";
    $img4  ="img/usuarios/".$ide."/2.png";

    
    $directorio ="public/img/usuarios/".$ide;
    if(file_exists($directorio)){
        
              
    }else{

      mkdir($directorio , 0777);

    }

    $id = $directorio;

  $leer->escribir_A($ide,$id."/id.txt");
  $leer->escribir($ide,$id."/id.txt");

  $leer->escribir_A($titulo,$id."/titulo.txt");
  $leer->escribir($titulo,$id."/titulo.txt");

  $leer->escribir_A($texto,$id."/texto.txt");
  $leer->escribir($texto,$id."/texto.txt");

  $leer->escribir_A($email,$id."/email.txt");
  $leer->escribir($email,$id."/email.txt");

  $leer->escribir_A($fecha,$id."/fecha.txt");
  $leer->escribir($fecha,$id."/fecha.txt");

  $leer->escribir_A($img1,$id."/img1.txt");
  $leer->escribir($img1,$id."/img1.txt");

  $leer->escribir_A($img2,$id."/img2.txt");
  $leer->escribir($img2,$id."/img2.txt");

  $leer->escribir_A($img3,$id."/img3.txt");
  $leer->escribir($img3,$id."/img3.txt");

  $leer->escribir_A($img4,$id."/img4.txt");
  $leer->escribir($img4,$id."/img4.txt");

  ////  $video = $_POST['video'];
  $leer->escribir_A($video,$id."/video.txt");
  $leer->escribir($video,$id."/video.txt");
  //// $exampleInputFile = $_POST['exampleInputFile'];
  $leer->escribir_A($exampleInputFile,$id."/exampleInputFile.txt");
  $leer->escribir($exampleInputFile,$id."/exampleInputFile.txt");
  ///////   $InputFile2 = $_POST['InputFile2'];
  $leer->escribir_A($InputFile2,$id."/InputFile2.txt");
  $leer->escribir($InputFile2,$id."/InputFile2.txt");
  ////  $bInputFile3 = $_POST['bInputFile3'];
  $leer->escribir_A($bInputFile3,$id."/bInputFile3.txt");
  $leer->escribir($bInputFile3,$id."/bInputFile3.txt");
  /////////    $dInputFile4 = $_POST['dInputFile4'];
  $leer->escribir_A($dInputFile4,$id."/dInputFile4.txt");
  $leer->escribir($dInputFile4,$id."/dInputFile4.txt");
  //////////   $fInputFile5 = $_POST['fInputFile5'];
  $leer->escribir_A($fInputFile5,$id."/fInputFile5.txt");
  $leer->escribir($fInputFile5,$id."/fInputFile5.txt");
  ////////  $updated_at = $_POST['updated_at'];
  $leer->escribir_A($updated_at,$id."/updated_at.txt");
  $leer->escribir($updated_at,$id."/updated_at.txt");



   /////////// $actualpath = "imagenes/".$path;
   if($video =="h"){

     $path = $id."/1.png";

     $path1 = $id."/2.png";
     $path2 = $id."/3.png";
     $path3 = $id."/4.png";
     
   }

   if($img1 =="h"){

     $path = $id."/5.mp4";

   }

   if($imagen == ""){

echo "esto es imagen ".$imagen;

   }


if($imagen != ""){
   file_put_contents($path, base64_decode($imagen));

}


 
    
if($imagen != ""){
    file_put_contents($path1, base64_decode($imagen1));
  }


    if($imagen != ""){

    file_put_contents($path2, base64_decode($imagen2));
  }
    if($imagen != ""){

    file_put_contents($path3, base64_decode($imagen3));
  }
  /*


   /// echo "SE SUBIO EXITOSAMENTE";

 ///  echo $ultimo_id;

  /// print_r($result1);
///}
////$usuario = "Sql1644130";
////$contrasena = "Carlos227567@@";
////$servidor = "89.46.111.248";
////$database = "Sql1644130_3";



///$imagen= $_POST['foto'];
///$nombre = $_POST['nombre'];
/////   $id = $_POST['id'];
///$titulo = $_POST['titulo'];

///$texto = $_POST['texto'];
///$email = $_POST['email'];
///$fecha = $_POST['fecha'];

///$img1 = $_POST['img1'];
///$img2 = $_POST['img2'];
///$img3 = $_POST['img3'];
///$img4 = $_POST['img4'];

///$video = $_POST['video'];
///$exampleInputFile = $_POST['exampleInputFile'];
///$InputFile2 = $_POST['InputFile2'];
///$bInputFile3 = $_POST['bInputFile3'];
///$dInputFile4 = $_POST['dInputFile4'];
///$fInputFile5 = $_POST['fInputFile5'];S
*/
