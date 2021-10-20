<?php
include_once("conexion.php");

//1. Crear conexi�n a la Base de Datos

$con=mysqli_connect($host,$usuario,$clave,$bd) or die('Fallo la conexion');
mysqli_set_charset($con,"utf8");

//2. Tomar los campos provenientes del Formulario


$vid = $_POST['cid'];
$vnombre = $_POST['cnombre'];
$vapellido = $_POST['capellido'];
$vcorreo = $_POST['ccorreo'];
$vcontraseña = $_POST['ccontraseña'];
             
		   
 if($vid !=null && $vnombre !=null && $vapellido !=null && $vcorreo !=null && $vcontraseña !=null){  
 
//3. Insertar campos en la Base de Datos 

$inserta = "INSERT INTO $bd.practica (id, nombre, apellido, correo, contraseña) VALUES ('$vid','$vnombre','$vapellido','$vcorreo','$vcontraseña');";
           $resultado = mysqli_query($con, $inserta);
echo json_encode ($resultado);

header("location:index.php");

}


mysqli_close($con);
?>

