<?php
require "objetos/escritor.php";





require_once "conexion.php";
$leer = new contrasena;



$name= $_POST['name'];
$Suname= $_POST['Suname'];
$email= $_POST['email'];
$hash= $_POST['pass'];
$roll= $_POST['roll'];
$salt= $_POST['salt'];

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
$datos["salt"]= $salt;
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
       

    
function email(){
  $leer = new contrasena;

$direccion = $_POST["direccionCliente"];




$telefonocliente = $_POST["telefonoCleiente"];
$mailCliente = $_POST["mailCliente"];
$mailNegocio = $_POST["mailNegocio"];
$totalfactura = $_POST["totalFacturaCliente"];
$cadenaPedidos = $_POST["cadenaPedidoClientes"];

$leer->escribir_A($mailCliente." ".$telefonocliente." ".$direccion." ".$cadenaPedidos." Siguiente ","objetos/pedidos/pedido.php");


    $mail="carlosmontoya170718@gmail.com";
    //////////////////////////////////////////////////////
  
    
 
    $fromName="PlatsyPlats";
    $fromMail=$mailNegocio;
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";

    // Cabeceras adicionales
    $headers .= "From: $fromName <$fromMail>\r\n";
   /// $headers .= "To: $name <$mail>\r\n";
  ///  $headers .= "Reply-To: $mail\r\n";
  ///  $headers .= "X-Mailer: PHP/" . phpversion();

    $title= " Orden de pedido cliente '.$mailCliente.' direccion del pedido : ".$direccion;
    
    $mensaje = '
    <img src="https://www.nuevoclock.com/lamonserga/modules/ps_imageslider/images/308afca3bdd2bae918dcbc47dc6a37c275b25bcf_logoweb.jpg" width="130">
    <br>
    <font color="#000000">



    Pedido del cliente '.$mailCliente.'<br><br>
    Productos pedidos con detalle :
    <ul>

   <li>
   . Usuario: '.$mailCliente.'
   </li>
   <li>
   . Total Factura: '.$totalfactura.'
   </li>
   <li>
   . Pedidos : '.$cadenaPedidos.'
   </li>
   </ul>
    
   precio a pagar con iva es '.$totalfactura.':<br><br>

    Direccon de la entrega '.$direccion.'<br><br>

    Telefono de la entrega '.$telefonocliente.'<br><br>
    
    Pago contra rembolso <br><br>

    Para cualquier consulta escribenos por e-mail : '.$mailNegocio.'
    
    THE <b>PLATS&PLATS</b> AR APP TEAM.<br>
    </font>
    ';
    


    // Si cualquier línea es más larga de 70 caracteres, se debería usar wordwrap()
   ////// $mensaje = wordwrap($mensaje, 70, "\r\n");

    // Enviarlo
        mail($mailNegocio, $title, $mensaje,$headers );
        mail($mailCliente, $title, $mensaje,$headers );

        //////////////////////////////////////////////////////////////////////////////////////////////

}
email();