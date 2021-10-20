<?php
include_once('conexion.php');

$con = mysqli_connect($host, $usuario, $clave, $bd) or die('Fallo la conexion');
mysqli_set_charset($con, "utf8");

session_start();


?>

<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <title>Perfiles</title>
  <style type="text/css">
    #apDiv1 {
      position: absolute;
      left: 268px;
      top: 469px;
      width: 99px;
      height: 29px;
      z-index: 1;
    }
  </style>
</head>

<body>
  <?php

  $id1 = isset($_GET['id']) ? $_GET['id'] : '';

  $consulta = "SELECT * FROM $bd.practica WHERE id = '$id1'";

  $resultado = mysqli_query($con, $consulta) or die(mysqli_error($con));

  ?>
  <div class="container">



    <?php
    while ($fila = mysqli_fetch_array($resultado)) {

    ?>

      <form id="form1" name="form1" method="post" action="Editar_practica.php">
        <fieldset>
          <legend>
            <h2>
              <center>
                <p>Modificar Prácticas</p>

              </center>
            </h2>
          </legend>
          <center>

            <table width="636" border="0">
              <input name="cid" type="text" id="cid" size="45" hidden="true" value="<?php echo $fila['id']; ?>" />
              <tr>
                <td>ID.</td>
                <td><label for="cidperfil"></label>
                  <input name="cid" type="text" id="cid" size="45" value="<?php echo $fila['id']; ?>" disabled />
                </td>
              </tr>

              <tr>
                <td>NOMBRE</td>
                <td><label for="cnombre"></label>
                  <input name="cnombre" type="text" id="cnombre" size="45" value="<?php echo $fila['nombre']; ?>" />
                </td>
              </tr>

              <tr>
                <td>APELLIDOS</td>
                <td><label for="cnombre"></label>
                  <input name="capellido" type="text" id="capellido" size="45" value="<?php echo $fila['apellido']; ?>" />
                </td>
              </tr>
              <tr>
                <td>CORREO</td>
                <td><label for="ccorreo"></label>
                  <input name="ccorreo" type="text" id="ccorreo" size="45" value="<?php echo $fila['correo']; ?>" />
                </td>
              </tr>
              <tr>
                <td>CONTRASEÑA</td>
                <td><label for="ccontraseña"></label>
                  <input name="ccontraseña" type="text" id="ccontraseña" size="45" value="<?php echo $fila['contraseña']; ?>" />
                </td>
              </tr>
              <tr>
                <td><input type="submit" name="actualizar" id="button" value="Actualizar" /></td>

              </tr>
            </table>
            <p>&nbsp;</p>
          </center>
        </fieldset>
      </form>
    <?php
    }
    ?>

    </table>

  </div>
  <?php
  //1. Crear el proceso de actualización de los ddatos
  //2. Toma los datos provenientes del Formulario y posteriormente los asigna a los campos de tabla en la Base de Datos 

  $id1 = isset($_POST['cid']) ? $_POST['cid'] : '';
  $nnombre = isset($_POST['cnombre']) ? $_POST['cnombre'] : '';
  $napellido = isset($_POST['capellido']) ? $_POST['capellido'] : '';
  $ncorreo = isset($_POST['ccorreo']) ? $_POST['ccorreo'] : '';
  $ncontraseña = isset($_POST['ccontraseña']) ? $_POST['ccontraseña'] : '';


  if ($id1 != null && $nnombre != null && $napellido != null && $ncorreo != null && $ncontraseña != null) {

    $modificar = "UPDATE $bd.practica SET nombre='$nnombre', apellido = '$napellido', correo = '$ncorreo', contraseña = '$ncontraseña' WHERE id=$id1;";
    $resultado = mysqli_query($con, $modificar);


    header("location:index.php");
  }

  mysqli_close($con);

  ?>


</body>

</html>