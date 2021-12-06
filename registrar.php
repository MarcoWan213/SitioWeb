<?php
include 'Db.php';
$nombre = $conexion->real_escape_string($_POST["nombre"]);
$apellidoP = $conexion->real_escape_string($_POST["apellidoP"]);
$apellidoM = $conexion->real_escape_string($_POST["apellidoM"]);
$email = $conexion->real_escape_string($_POST["email"]);
$contraseña = $conexion->real_escape_string($_POST["contraseña"]);

//insertar = "INSERT INTO `personal`(`idPersonal`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `contraseña`, `email`)VALUES (NULL,
//'$nombre','$apellidoP', '$apellidoM', '$contraseña', '$email')";
//$resultado = mysqli_query($conexion,$insertar);

$resultado = $conexion->query("INSERT INTO `personal`(`idPersonal`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `contraseña`, `email`) VALUES(NULL,
'$nombre','$apellidoP', '$apellidoM', '$contraseña', '$email')");
if($resultado){
    echo 'Registro Correcto';
}
else{
    echo 'Error';
}

mysqli_close($conexion);