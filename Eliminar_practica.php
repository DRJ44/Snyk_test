
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Eliminar Práctica</title>
    </head>
    <body>
        <?php
        include_once('conexion.php');

         $con=mysqli_connect($host,$usuario,$clave,$bd) or die('Fallo la conexion');
         mysqli_set_charset($con,"utf8");

         $id1 = isset($_GET['id']) ? $_GET['id'] : '';
		 
		 if($id1 !=null){  
		 
		 $eliminar ="delete from $bd.practica where id=$id1";
         $resultado = mysqli_query($con, $eliminar);
         
		header("location:index.php");
        }
		 
		  mysqli_close($con);      
         
        ?>
    </body>
</html>
