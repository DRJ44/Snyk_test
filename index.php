<?php
include_once('conexion.php');

$con = mysqli_connect($host, $usuario, $clave, $bd) or die('Fallo la conexion');
mysqli_set_charset($con, "utf8");

?>



<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <title>Listado de Clientes</title>
  <style type="text/css">
    #apDiv1 {
      position: absolute;
      left: 261px;
      top: 73px;
      width: 752px;
      height: 32px;
      z-index: 1;
    }

    #apDiv2 {
      position: absolute;
      left: 15px;
      top: 106px;
      width: 230px;
      height: 26px;
      z-index: 2;
    }
  </style>


  <!-- for-mobile-apps -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Classic Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="application/x-javascript">
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!-- //for-mobile-apps -->
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <!-- js -->
  <script src="js/jquery.min.js"></script>
  <!-- //js -->
  <!-- cart -->
  <script src="js/simpleCart.min.js"></script>
  <!-- cart -->
  <!-- for bootstrap working -->
  <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
  <!-- //for bootstrap working -->
  <!-- animation-effect -->
  <link href="css/animate.min.css" rel="stylesheet">
  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <!-- //animation-effect -->
  <link href='//fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
  <style type="text/css">
    #apDiv1 {
      position: absolute;
      left: 89px;
      top: 44px;
      width: 494px;
      height: 75px;
      z-index: 1;
    }
  </style>

  <link rel="Shortcut Icon" href="icono.ico" type="image/x-icon" />

  <style type="text/css">
    #apDiv2 {
      position: absolute;
      left: 79px;
      top: 139px;
      width: 127px;
      height: 37px;
      z-index: 2;
    }
  </style>



  <!-- for-mobile-apps -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Classic Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="application/x-javascript">
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!-- //for-mobile-apps -->
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <!-- js -->
  <script src="js/jquery.min.js"></script>
  <!-- //js -->
  <!-- cart -->
  <script src="js/simpleCart.min.js"></script>
  <!-- cart -->
  <!-- for bootstrap working -->
  <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
  <!-- //for bootstrap working -->
  <!-- animation-effect -->
  <link href="css/animate.min.css" rel="stylesheet">
  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <!-- //animation-effect -->
  <link href='//fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
  <style type="text/css">
    #apDiv1 {
      position: absolute;
      left: 89px;
      top: 44px;
      width: 494px;
      height: 75px;
      z-index: 1;
    }
  </style>

  <link rel="Shortcut Icon" href="icono.ico" type="image/x-icon" />

  <style type="text/css">
    #apDiv2 {
      position: absolute;
      left: 79px;
      top: 139px;
      width: 127px;
      height: 37px;
      z-index: 2;
    }
  </style>

</head>

<script type="text/javascript">
  function ConfirmDelete() {
    var respuesta = confirm("¿Esta seguro que desea Eliminar el Registro?");

    if (respuesta == true) {
      return true;
    } else {
      return false;
    }

  }
</script>


<body>
  <!-- Consulta que permite seleccionar Los Nombres y Apellidos del Cliente -->
  <?php

  $consulta = "SELECT * FROM $bd.practica";
  $resultado = mysqli_query($con, $consulta) or die(mysql_error());

  ?>

  <div id="apDiv1">

    <table align="left" width="429" border="0">
      <tr>
        <td width="664">
          <form class="form">
            <input name="txtbuscar" type="text" class="form-control" title="Ingresar el Nombre o ID." size="40" placeholder="Ingresar el Nombre o ID">
            <input type="submit" value="Buscar">
          </form>

        </td>

      </tr>
    </table>

  </div>

  <!-- Consulta que permite seleccionar Los Datos de la venta -->
  <?php
  $buscar = isset($_GET['txtbuscar']) ? $_GET['txtbuscar'] : '';

  if ($buscar != null) {
    $consulta = "SELECT * FROM $bd.practica WHERE id LIKE" . "'%" . $buscar . "%' OR nombre LIKE" . "'%" . $buscar . "%' ";


    $resultado = mysqli_query($con, $consulta) or die(mysqli_error($con));
  } else {
  }
  ?>

  <div id="apDiv2"><a href="agrega_practica.php" target="principal" class="btn btn-warning btn-sm">Agregar Nvo.</a></div>
  <div class="container">
    <center>
      <h3 align="left">Buscar</h3>
    </center>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>




    <hr>
    <table width="68%" border="1" cellpadding="0" cellspacing="1" bordercolor="#000000" style="border-collapse:collapse;border-color:#ddd;" align="center">
      <tr>

        <th width="3%" class="text-center">ID</th>
        <th width="21%" class="text-center">NOMBRE</th>
        <th width="21%" class="text-center">APELLIDO</th>
        <th width="21%" class="text-center">CORREO</th>
        <th width="17%" class="text-center">CONTRASEÑA</th>
        <th width="17%" class="text-center">ACCIÓN</th>


      </tr><a href="../../../PerfLogs"></a>
      <?php
      while ($fila = mysqli_fetch_array($resultado)) {
      ?>
        <tr>
          <td class="text-center"><?php echo $fila['id']; ?></td>
          <td><?php echo $fila['nombre']; ?></td>
          <td><?php echo $fila['apellido']; ?></td>
          <td><?php echo $fila['correo']; ?></td>
          <td><?php echo $fila['contraseña']; ?></td>

          <td class="text-center">
            <a href="Editar_practica.php?id=<?php echo $fila['id']; ?>" class="btn btn-warning btn-sm">Modificar</a>
            <a href="Eliminar_practica.php?id=<?php echo $fila['id']; ?>" class="btn btn-warning btn-sm" onclick="return ConfirmDelete()">Eliminar</a>
          </td>
        </tr>
      <?php
      }

      mysqli_close($con);
      ?>

    </table>

  </div>

</body>

</html>