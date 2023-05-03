<?php

include("include/conexion.php");



if(isset($_POST['registroAlumno'])){

$matricula = $_POST['matricula'];
$nombre = $_POST['nombre'];


$consulta = "INSERT INTO estudiantes (matricula, nombre) VALUES ('$matricula', '$nombre')";
$resultado = mysqli_query($conexion, $consulta);

if(!$resultado){

    die("Fallo la consulta");

}

$_SESSION['mensaje'] = 'Registro guardado con exito';
$_SESSION['tipoMensaje'] = 'success';


header("Location: index.php");

}


?>