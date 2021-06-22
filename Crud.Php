<?php

include_once 'dbPersonal.php';

/* Codigo para Insertar Datos */
if (isset($_POST['guardar'])) {

  echo "Guardando...";
  $nombre = $MySQLiconn->real_escape_string($_POST['nombre']);
  $apellidoP = $MySQLiconn->real_escape_string($_POST['apellidoP']);
  $apellidoM = $MySQLiconn->real_escape_string($_POST['apellidoM']);
  $email = $MySQLiconn->real_escape_string($_POST['email']);
  $contraseña = $MySQLiconn->real_escape_string($_POST['contraseña']);
<<<<<<< HEAD
 
=======


>>>>>>> 9f2cb9b7b740b85b5d366a101d3ca8343c8713bf
  $SQL = $MySQLiconn->query("INSERT INTO personal(idPersonal, nombre, apellidoP, apellidoM, email, contraseña)  
    VALUES(NULL,'$nombre','$apellidoP','$apellidoM','$email','$contraseña')");


  if (!$SQL) {
    echo $MySQLiconn->error;
  }
<<<<<<< HEAD
  header("Location:indexPersonal.php");
=======
  header("Location:pagRegistroCrud.php");
>>>>>>> 9f2cb9b7b740b85b5d366a101d3ca8343c8713bf
}

/* Codigo para eliminar Datos */
if (isset($_GET['eliminar'])) {
  $SQL = $MySQLiconn->query("DELETE FROM `personal` WHERE `personal`.`idPersonal` = " . $_GET['eliminar']);
<<<<<<< HEAD
  header("Location:indexPersonal.php");
=======
  header("Location:pagRegistroCrud.php");
>>>>>>> 9f2cb9b7b740b85b5d366a101d3ca8343c8713bf
}


/* Codigo para Editar Datos */
if (isset($_GET['editar'])) {
  $SQL = $MySQLiconn->query("SELECT * FROM `personal` WHERE `personal`.`idPersonal`=" . $_GET['editar']);
  $getROW = $SQL->fetch_array();
}

/* Codigo para Actualizar Datos */
if (isset($_POST['actualizar'])) {

    $SQL = $MySQLiconn->query(
<<<<<<< HEAD
    "UPDATE personal SET nombre='"
=======
      "UPDATE personal SET nombre='"
>>>>>>> 9f2cb9b7b740b85b5d366a101d3ca8343c8713bf
      . $_POST['nombre']
      . "', apellidoP='"
      . $_POST['apellidoP']
      . "',apellidoM='"
      . $_POST['apellidoM']
      . "',email='"
      . $_POST['email']
      . "',contraseña='"
      . $_POST['contraseña']
      . "' WHERE idPersonal="
      . $_GET['editar']
  );
  header("Location:indexPersonal.php");
}
?>